<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Parser\RobotFile;
use Softwarewisdom\Crawler\Bot\SitemapBot;
use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Downloader\Page;
use Softwarewisdom\Crawler\Entity\Queue;

global $entityManager;

$timezone = trim( ini_get('date.timezone'));
if (!$timezone) {
    date_default_timezone_set('Pacific/Auckland');
}
//while (1) {
    echo "start downloading nz yellow page site map \n";
    $bot = new SitemapBot(new RobotFile(new Page("https://yellow.co.nz/robots.txt")), 'nz yellow page');
    $sitemap = \Softwarewisdom\Crawler\Tools\saveSiteMapToDB($bot, $entityManager);
//}

