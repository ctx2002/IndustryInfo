<?php
namespace Softwarewisdom\Crawler\Tools;

use Doctrine\ORM\EntityManager;
use Softwarewisdom\Crawler\Bot\IBot;

function saveSiteMapToDB(IBot $bot,EntityManager $em)
{
    /** @var $sitemap \Softwarewisdom\Crawler\Entity\Sitemap */
    $sitemap = $em->getRepository('\Softwarewisdom\Crawler\Entity\Sitemap')->loadOneOrNew($bot->name());
    $sitemap->setName($bot->name());
    $sitemap->setSitemap($bot->sitemap());
    $em->persist($sitemap);
    $em->flush();
}