<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/11/2017
 * Time: 11:19 AM
 */

namespace Softwarewisdom\Crawler\Db;
use Softwarewisdom\Crawler\Db\DBMaintenance;
use Doctrine\ORM\EntityManager;
class Sqlite3 implements DBMaintenance
{
    private $manager;
    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    public function vacuum()
    {
        //The VACUUM command rebuilds the database file,
        // repacking it into a minimal amount of disk space.
        //A VACUUM will fail if there is an open transaction,
        // or if there are one or more active SQL statements when it is run
        $sql = "VACUUM";
        $conn = $this->manager->getConnection();
        $conn->exec($sql);
    }

    public function optimize()
    {
        $sql = "PRAGMA optimize";
        $conn = $this->manager->getConnection();
        return $conn->fetchAll($sql);
    }

    public function check()
    {
        $sql = "PRAGMA integrity_check";
        $conn = $this->manager->getConnection();
        return $conn->fetchAll($sql);
    }

    public function run()
    {
        $this->vacuum();
        $this->check();
    }
}