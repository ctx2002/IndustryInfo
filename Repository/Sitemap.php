<?php

namespace Softwarewisdom\Crawler\Repository;
use Doctrine\ORM\EntityRepository;

class Sitemap extends EntityRepository
{
    public function loadOneOrNew($name)
    {
        $result = $this->findBy(['name' => $name]);
        if ($result) {
            if (isset($result[0])) {
                return $result[0];
            }
        }
        return new \Softwarewisdom\Crawler\Entity\Sitemap();
    }
}