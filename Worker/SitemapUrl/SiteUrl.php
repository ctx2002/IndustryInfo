<?php

namespace Softwarewisdom\Crawler\Worker\SitemapUrl;

use Softwarewisdom\Crawler\Contract\SitemapContract;
use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use Symfony\Component\Console\Helper\ProgressBar;

class SiteUrl implements SitemapContract
{
    private $urls;
    private $em;
    private $progressBar;
    public function __construct(EntityManager $entityManager)
    {
        $this->urls = array();
        $this->em = $entityManager;
    }

    public function setProgressBar(ProgressBar $bar)
    {
        $this->progressBar = $bar;
        $this->progressBar->start();
    }
    /* filling urls table **/
    public function sitemapurl()
    {

        $query = $this->em->createQuery('SELECT s FROM Softwarewisdom\Crawler\Entity\SitemapUrl s WHERE s.status=\'pending\' ORDER BY s.id');
        /** @var \Softwarewisdom\Crawler\Entity\SitemapUrl $sitemapUrl **/
        $sitemapUrl= $query->setMaxResults(1)->getOneOrNullResult();


        $xml = file_get_contents($sitemapUrl->getUrl());
        if ($xml) {
            $str = simplexml_load_string($xml);
            if ($str) {
                foreach ($str->url as $site) {
                    $this->urls[] = array("loc" => (string)$site->loc,
                        "changefreq" => (string)$site->changefreq, 'parser'=> "",'status'=>'pending');
                    $this->progressAdv();
                    $this->insert();
                }
                $this->progressAdv();
                $this->insert();
                $sitemapUrl->setStatus("done");
            }
        }

        $this->em->flush();
        $this->em->clear();
    }

    private function progressAdv()
    {
        if ($this->progressBar) {
            $this->progressBar->advance();
        }
    }

    public function fillingContent()
    {
        $query = $this->em->createQuery('SELECT s FROM Softwarewisdom\Crawler\Entity\Url s WHERE s.status=\'pending\' ORDER BY s.id');

        //$url = $query->setMaxResults(1)->getOneOrNullResult();
        $results = $query->setMaxResults(20)->getResult();
        foreach ($results as $url) {
            /** @var \Softwarewisdom\Crawler\Entity\Url $url **/
            echo $url->getId();
            $html = file_get_contents($url->getUrl());
            $url->setHtmlContent(trim( $html));
            $url->setStatus("processing");
        }
        $this->em->flush();
        /*if ($url) {
            $html = file_get_contents($url->getUrl());
            $url->setHtmlContent(trim( $html));
            $url->setStatus("processing");
            $c = $url->getFailedCounter();
            if (!$html) {
                if(!$c) {
                    $c = 1;
                } else {
                    $c++;
                }
                $url->setFailedCounter($c);
            }

            $this->em->flush();
        }*/
    }

    private function insert($limit = 10000)
    {
        if (count( $this->urls) >= $limit) {


            /*INSERT INTO 'tablename' ('column1', 'column2') VALUES
        ('data1', 'data2'),
      ('data3', 'data4'),
      ('data5', 'data6'),
      ('data7', 'data8')*/
            $tableName = $this->em->getClassMetadata('Softwarewisdom\Crawler\Entity\Url')->getTableName();
            $sql = "INSERT OR IGNORE INTO " . $tableName . "(url,changefreq,parser,status) VALUES ";
            $part = '';
            foreach ($this->urls as $url) {
                //var_dump($url); die();
                $part .= "('".implode("','", $url) . "'),";
            }
            $sql = trim($sql.$part, ",");
            //var_dump(); die();
            $con = $this->em->getConnection();
            $con->query($sql);
            $this->urls = array();

        }
    }
}