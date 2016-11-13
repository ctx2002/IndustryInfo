<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Parser\Excel\NZ\Client;
use Softwarewisdom\Crawler\Downloader\NZ\YellowPage;
use Softwarewisdom\Crawler\Parser\RobotFile;

global $entityManager;
/*$conn = $entityManager->getConnection();

$client = new Client();
$data = $client->fetch();

//$ind = new IndustrySeed();
$sql = "INSERT OR IGNORE INTO industry_seed (name,code) VALUES (:name,:code)";
$conn->beginTransaction();
foreach ($data as $item) {
    $stm = $conn->prepare($sql);
    $stm->bindValue("name", $item['B']);
    $stm->bindValue("code", $item['A']);
    $stm->execute();
}
$conn->commit();*/
/*$yellow = new YellowPage();
$links = $yellow->search('beekeeping');
var_dump($links);*/

$ro = new RobotFile("https://yellow.co.nz/");
$content = $ro->parse();
var_dump($content);
