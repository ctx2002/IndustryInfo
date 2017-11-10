<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Bot\SitemapBot;
use Softwarewisdom\Crawler\Downloader\Page;
use Softwarewisdom\Crawler\Parser\RobotFile;

global $entityManager;

$timezone = trim(ini_get('date.timezone'));
if (!$timezone) {
    date_default_timezone_set('Pacific/Auckland');
}

$bot = new SitemapBot(new RobotFile(new Page("https://yellow.co.nz/robots.txt")), 'nz yellow page');
$sitemap = \Softwarewisdom\Crawler\Tools\saveSiteMapToDB($bot, $entityManager);

