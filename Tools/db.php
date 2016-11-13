<?php
namespace Softwarewisdom\Crawler\Tools;

use Doctrine\ORM\EntityManager;
use Softwarewisdom\Crawler\Entity\Sitemap;
use Softwarewisdom\Crawler\Bot\IBot;

function saveSiteMapToDB(IBot $bot,EntityManager $em)
{
    $sitemap = new Sitemap();
    $sitemap->setName($bot->name());
    $sitemap->setSitemap($bot->sitemap());
    $em->persist($sitemap);
    $em->flush();
}