<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "SiteUrlCommand.php";
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new SiteUrlCommand());
$app->run();