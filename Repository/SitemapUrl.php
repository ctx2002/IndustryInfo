<?php


namespace Softwarewisdom\Crawler\Repository;
use Doctrine\ORM\EntityRepository;

class SitemapUrl extends EntityRepository
{
    public function insertUrls($urls)
    {
        /*INSERT INTO 'tablename' ('column1', 'column2') VALUES
    ('data1', 'data2'),
  ('data3', 'data4'),
  ('data5', 'data6'),
  ('data7', 'data8')*/
        $tableName = $this->getEntityManager()->getClassMetadata('Softwarewisdom\Crawler\Entity\SitemapUrl')->getTableName();
        $sql = "INSERT OR IGNORE INTO " . $tableName . "(url) VALUES ( '";
        $part = trim( implode("'),('", $urls));

        $con = $this->getEntityManager()->getConnection();
        $con->query($sql. $part . "')");

    }
}