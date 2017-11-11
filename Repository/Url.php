<?php

namespace Softwarewisdom\Crawler\Repository;
use Doctrine\ORM\EntityRepository;

class Url extends EntityRepository
{
    public function deleteStatus($status)
    {
        $dql = "DELETE Softwarewisdom\Crawler\Entity\Url u WHERE u.status = :status";
        $query = $this->getEntityManager()->createQuery($dql)
            ->setParameter("status", $status);
        $query->execute();
    }
}