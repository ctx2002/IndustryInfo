<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Parser\Excel\NZ\Client;
use Softwarewisdom\Crawler\Downloader\NZ\YellowPage;
use Softwarewisdom\Crawler\Parser\RobotFile;
use Softwarewisdom\Crawler\Bot\NZYellowPageBot;
use Softwarewisdom\Crawler\Bot\SitemapBot;
use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Downloader\Page;
use Symfony\Component\DomCrawler\Crawler;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;
use Softwarewisdom\Crawler\Db\Sqlite3;

global $entityManager;
$entityManager->getConnection()->getConfiguration()->setSQLLogger(null);
$db = new Sqlite3($entityManager);
$db->run();
/*$html = @file_get_contents("http://www.gmdesigns.co.nz/");
//$html = @file_get_contents("http://www.rsport.co.nz");
if ($html) {
    $crawler = new Crawler($html);
    $doms = $crawler->filterXPath('//a[@href]');
    foreach ($doms as $link) {
        var_dump($link->getAttribute('href'));
    }
} else {

}*/
//$url = new SiteUrl($entityManager);
//$url->fillingContent();
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

/*$bot = new SitemapBot(new RobotFile( new Page("https://yellow.co.nz/robots.txt")), 'nz yellow page');

\Softwarewisdom\Crawler\Tools\saveSiteMapToDB($bot, $entityManager);*/

//for each site map url , search all urls inside the map.

//use supervisor to run seedSites.php, sitemapUrl.php, and siteUrl.php,
// in siteUrl, fillingContent used to fetch html page.
//seedSites.php, sitemapUrl.php, and siteUrl.php should only be run in single process

// TODO: need a page analysist , so we can grab all html like and put into siteUrl.
//TODO: fetch each urls in siteUrl Table, and 