<?php

namespace Softwarewisdom\Crawler\Bot;
use Softwarewisdom\Crawler\Parser\RobotFile;

class NZYellowPageBot implements IBot
{
    private $robotFile;
    public function __construct(RobotFile $file)
    {
        $this->robotFile = $file;
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
        return 'NZYellowPageBot';
    }
}