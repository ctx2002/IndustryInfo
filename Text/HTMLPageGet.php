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
use Softwarewisdom\Crawler\Parser\RobotFile;

class HTMLPageGet
{
    /**
     * @var Url
     */
    private $url;
    /**
     * @var \Psr\Http\Message\ResponseInterface | null
     */
    private $content;
    /**
     * @var \DOMElement[]
     */
    private $aNodes;

    /**
     * @var RobotFile
     */
    private $file;
    /**
     * HTMLPageGet constructor.
     * @param $url
     */
    public function __construct($url, RobotFile $file)
    {
        $this->url = $url;
        $this->file = $file;
        $this->content = null;
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

    public function body()
    {
        return $this->content->getBody()->getContents();
    }

    /**
     * @return $this
     */
    public function download()
    {
        $url = new Url($this->url);
        $get = new GetClient($url);
        //is path allowed?

        if (!$this->file->parse()->isPathDisAllowed($url->path())) {
            $this->content = $get->loadUserAgent()->load($url->path());
        } else {
            echo $url->path() . " dis-allowed.\n";
        }
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