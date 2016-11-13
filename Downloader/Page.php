<?php

namespace Softwarewisdom\Crawler\Downloader;

class Page
{
    private $url = '';
    public function __construct($url)
    {
        $this->url  = $url;
    }

    public function contentArray()
    {
        $content = file($this->url);
        if(!$content) {
            throw new \Exception("unable to process " . $this->url);
        }
        return $content;
    }
}