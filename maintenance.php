<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Db\Sqlite3;
//this command need to run under sudo mode
shell_exec('supervisorctl stop urlContent');

global $entityManager;
$db = new Sqlite3($entityManager);
$db->run();

shell_exec('supervisorctl start urlContent');