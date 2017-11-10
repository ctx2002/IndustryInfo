<?php
require_once "bootstrap.php";

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Softwarewisdom\Crawler\Worker\SitemapUrl\SiteUrl;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;


class SiteUrlCommand extends Command
{
    protected function configure(){
        $this->setName("site:url:loading")
            ->setDescription("loading xml content from sitemap_url table")
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output){

        global $entityManager;

        try {
            $progress = new ProgressBar($output);
            $progress->setRedrawFrequency(0.4);
            $siteurl = new SiteUrl($entityManager);
            $siteurl->setProgressBar($progress);
            $siteurl->sitemapurl();
            $progress->finish();

        } catch (\Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
}