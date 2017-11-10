<?php
namespace Softwarewisdom\Crawler\Tools;

use Doctrine\ORM\EntityManager;
use Softwarewisdom\Crawler\Bot\IBot;

function saveSiteMapToDB(IBot $bot,EntityManager $em)
{
    /** @var $sitemap \Softwarewisdom\Crawler\Entity\Sitemap */
    /*$sitemap = $em->getRepository('\Softwarewisdom\Crawler\Entity\Sitemap')->loadOneOrNull($bot->name());
    if (!$sitemap) {
        $sitemap = new \Softwarewisdom\Crawler\Entity\Sitemap();
    }*/
    $sitemap = new \Softwarewisdom\Crawler\Entity\Sitemap();
    $sitemap->setName($bot->name());
    $sitemap->setSitemap($bot->sitemap());
    $sitemap->setCreatedDate(new \DateTime());
    $em->persist($sitemap);
    $em->flush();
    return $sitemap;
}