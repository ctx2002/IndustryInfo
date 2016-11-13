<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Parser\Excel\NZ\Client;
use Softwarewisdom\Crawler\Downloader\NZ\YellowPage;
use Softwarewisdom\Crawler\Parser\RobotFile;
use Softwarewisdom\Crawler\Bot\NZYellowPageBot;
use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Downloader\Page;

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

/*$ro = new RobotFile("https://yellow.co.nz/");
$content = $ro->parse();
var_dump($content);*/

$bot = new NZYellowPageBot(new RobotFile( new Page("https://yellow.co.nz/robots.txt")));

\Softwarewisdom\Crawler\Tools\saveSiteMapToDB($bot, $entityManager);
