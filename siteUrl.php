<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;

global $entityManager;

try {
    $siteurl = new SiteUrl($entityManager);
    $siteurl->sitemapurl();

} catch (\Exception $e) {
    var_dump($e->getMessage());
    die();
}