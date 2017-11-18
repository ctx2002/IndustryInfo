<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/18/2017
 * Time: 5:19 PM
 */

namespace Softwarewisdom\Crawler\Downloader;
use Softwarewisdom\Crawler\HTTP\Url;
use Softwarewisdom\Crawler\HTTP\UserAgent;
class GetClient
{
    private $get;
    private $userAgent;
    private $config;
    private $url;
    public function __construct(Url $url)
    {
        $this->get = new Get();
        $this->url = $url;
        $this->userAgent = new UserAgent();
        $this->config = [];
    }

    public function loadUserAgent()
    {
        $one = $this->userAgent->getOne();
        if (!isset($this->config['headers'])) {
            $this->config['headers'] = [];
        }
        $this->config['headers']['User-Agent'] = $one;
        return $this;
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     * ****/
    public function load($path)
    {
        $this->config['base_uri'] = $this->url->baseUri();
        return $this->get->load($path,$this->config);
    }
}