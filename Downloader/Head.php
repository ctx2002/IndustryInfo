<?php

namespace Softwarewisdom\Crawler\Downloader;
use GuzzleHttp\Client;
use Softwarewisdom\Crawler\HTTP\Url;

class Head
{
    private $url;
    public function __construct($url)
    {
        $this->url = new Url($url);
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     * ****/
    public function load($path)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->url->baseUri(),
            // You can set any number of default request options.
            'timeout'  => 2.0
        ]);
        return $client->head($path);
    }
}