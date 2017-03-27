<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/24/2016
 * Time: 9:07 PM
 */

namespace Softwarewisdom\Crawler\Bot;
use Softwarewisdom\Crawler\Parser\RobotFile;

class SitemapBot implements IBot
{
    private $robotFile;
    private $siteName;
    public function __construct(RobotFile $file,$siteName)
    {
        $this->robotFile = $file;
        $this->siteName = $siteName;
        $this->robotFile->parse();
    }

    public function sitemap()
    {
        $url = $this->robotFile->siteMapUrl();
        $file = file_get_contents($url);
        if (!$file) {
            throw  new \Exception("unable to download from $url");
        }

        return $file;
    }

    public function name()
    {
        return $this->siteName;
    }
}