<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/18/2017
 * Time: 4:42 PM
 */

namespace Softwarewisdom\Crawler\Downloader;
use GuzzleHttp\Client;
use Softwarewisdom\Crawler\HTTP\Url;
use Softwarewisdom\Crawler\HTTP\UserAgent;

class Get
{
    private $userAgent;
    public function __construct()
    {
        $this->userAgent = new UserAgent();
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     * ****/
    public function load($path, $config = [])
    {
        $client = new Client($config);
        return $client->get($path);
    }
}