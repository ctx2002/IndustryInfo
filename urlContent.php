<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;
use Softwarewisdom\Crawler\Entity\Url;

global $entityManager;

try {
    $helper = new SiteUrl($entityManager);
    //$helper->fillingContent();
    $i = 0;
    while (true) {
        $helper->fillingContent();
        sleep(rand(10,45));
    }
} catch (\Exception $e) {
    var_dump($e->getMessage());
    die();
}