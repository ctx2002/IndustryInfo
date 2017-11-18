<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/18/2017
 * Time: 4:45 PM
 */

namespace Softwarewisdom\Crawler\Text;
use Softwarewisdom\Crawler\HTTP\Url;
use Softwarewisdom\Crawler\Downloader\GetClient;
use Symfony\Component\DomCrawler\Crawler;
class HTMLPageGet
{
    /**
     * @var Url
     */
    private $url;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $content;
    /**
     * @var \DOMElement[]
     */
    private $aNodes;

    /**
     * HTMLPageGet constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;

    }

    /**
     * @return \DOMElement[]
     */
    public function extractAHref()
    {
        $body = $this->content->getBody()->getContents();

        $crawler = new Crawler($body);
        $this->aNodes = $crawler->filterXPath('//a[@href]');
        return $this->aNodes;
    }

    /**
     * @return $this
     */
    public function download($path = "")
    {
        $get = new GetClient($this->url);
        $this->content = $get->loadUserAgent()->load($path);
        return $this;
    }

    /**
     * @param $seconds
     * @return $this
     */
    public function delay($seconds)
    {
        sleep($seconds);
        return $this;
    }
}