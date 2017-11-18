<?php

namespace Softwarewisdom\Crawler\Downloader;
use GuzzleHttp\Client;

class Head
{
    private $urlParts;
    public function __construct($url)
    {
        $this->urlParts = parse_url($url);
    }

    public function load($url)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }
}