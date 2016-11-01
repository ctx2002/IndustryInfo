<?php
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Parser\Excel\NZ\Client;

$client = new Client();
$client->fetch();