<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;

global $entityManager;

try {
    $helper = new SiteUrl($entityManager);
    //$helper->fillingContent();
    $i = 0;
    //while (true) {
    $helper->fillingContent();
    sleep(rand(5, 20));
    //}
} catch (\Exception $e) {
    var_dump($e->getMessage());
    die();
}
//process HTML Page
include "process.php";