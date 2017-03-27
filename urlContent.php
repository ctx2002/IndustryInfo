<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;
use Softwarewisdom\Crawler\Entity\Url;

global $entityManager;

try {
    $helper = new SiteUrl($entityManager);
    $helper->fillingContent();
} catch (\Exception $e) {
    var_dump($e->getMessage());
    die();
}