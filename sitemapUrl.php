<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Tools;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SitemapUrl;

global $entityManager;

    try {
        $query = $entityManager->createQuery('SELECT s FROM Softwarewisdom\Crawler\Entity\Sitemap s WHERE s.status = \'pending\' ORDER BY s.id');
        /** @var \Softwarewisdom\Crawler\Entity\Sitemap $sitemap */
        $sitemap = $query->setMaxResults(1)->getOneOrNullResult();

        if ($sitemap) {

            $surl = new SitemapUrl($sitemap, $entityManager);
            $surl->sitemapurl();
            $sitemap->setStatus("done");
            $entityManager->flush();
            $entityManager->clear();
        }

    } catch (\Exception $e) {
        var_dump($e->getMessage());
        die();
    }

