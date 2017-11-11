<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Softwarewisdom\Crawler\Entity as en;
use Doctrine\ORM\EntityManager;
global $entityManager;

$entityManager->getRepository(en\Sitemap::class)->deleteStatus("done");
//deleteStatus
$entityManager->getRepository(en\SitemapUrl::class)->deleteStatus("done");
$entityManager->getRepository(en\Url::class)->deleteStatus("done");