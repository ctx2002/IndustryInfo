<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Parser\Excel\NZ\Client;
use Softwarewisdom\Crawler\Entity\IndustrySeed;

global $entityManager;
$conn = $entityManager->getConnection();

$client = new Client();
$data = $client->fetch();

//$ind = new IndustrySeed();
$sql = "INSERT OR IGNORE INTO industry_seed (name,code) VALUES (:name,:code)";
foreach ($data as $item) {

    $stm = $conn->prepare($sql);
    $stm->bindValue("name", $item['B']);
    $stm->bindValue("code", $item['A']);
    $stm->execute();
}