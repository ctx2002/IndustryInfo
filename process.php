<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Text\Analyzer;


global $entityManager;

$conn = $entityManager->getConnection();
$repo = $entityManager->getRepository("\Softwarewisdom\Crawler\Entity\Url");
$results = $repo->findBy(array("status" => "processing"),array('id' => 'ASC'),10);

foreach ($results as $result) {
    /** @var \Softwarewisdom\Crawler\Entity\Url  $result**/
    $an = new Analyzer();
    $str = $result->getHtmlContent();
    if (trim($str)) {
        $text = $an->process($str);

        $st = $conn->prepare("select url from content where url = :url");
        $st->bindValue("url", $result->getUrl());
        $st->execute();
        $data = $st->fetchAll();
        $insert = "INSERT INTO content(url, body) VALUES(:url, :body)";
        if (count($data) > 0) {
            //old record, update.
            $insert = "UPDATE content SET body = :body WHERE url = :url";
        }
        $stm = $conn->prepare($insert);
        $stm->bindValue("url",  $result->getUrl());
        $stm->bindValue("body", $text);
        $stm->execute();
    }
}
$entityManager->flush();