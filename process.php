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
        $text = $conn->quote($text);
        $sql = 'INSERT INTO enrondata1(content) VALUES('.$text.')';
        $conn->exec($sql);
        $result->setStatus("done");
    }
}
$entityManager->flush();