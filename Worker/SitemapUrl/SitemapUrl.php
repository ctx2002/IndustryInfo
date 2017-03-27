<?php
namespace Softwarewisdom\Crawler\Worker\SitemapUrl;
use Softwarewisdom\Crawler\Contract\SitemapContract;
use Doctrine\ORM\EntityManager;
use Softwarewisdom\Crawler\Entity\Sitemap;

class SitemapUrl implements SitemapContract
{
    private $sitemap;
    private $urls;
    private $em;
    public function __construct(Sitemap $sitemap, EntityManager $entityManager)
    {
        $this->sitemap = $sitemap;
        $this->urls = array();
        $this->em = $entityManager;
    }

    public function sitemapurl()
    {
        $xml = $this->sitemap->getSitemap();
        $str = simplexml_load_string($xml);
        if ($str) {
            foreach ($str->sitemap as $site) {
                $this->insert($site->loc);
            }
        }

        $this->insertAndClean($this->urls);
    }

    private function insertAndClean($urls)
    {
        $this->loadurls($urls);
        $this->urls = array();
    }
    
    private function loadurls($urls)
    {
        if (!empty($this->urls)) {
            $this->em->getRepository('Softwarewisdom\Crawler\Entity\SitemapUrl')->insertUrls($urls);
        }
    }

    private function insert($url)
    {
        $this->urls[] = $url;
        if (count( $this->urls) == 100) {
            $this->insertAndClean($this->urls);
        }
    }
}