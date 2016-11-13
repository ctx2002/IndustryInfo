<?php
namespace Softwarewisdom\Crawler\Parser;
use Softwarewisdom\Crawler\Downloader\Page;

class RobotFile
{
    private $url = '';
    private $content;
    private $section;
    public function __construct(Page $url)
    {
        $this->url = $url;
        $this->section = [];
        $this->section["User-agent"] = array();
    }

    public function parse()
    {
        /*$file = file($this->url."robots.txt");
        if (!$file) {
            throw new \Exception("unable to download $this->url.\"robots.txt\" ");
        }
        $this->content = $file;*/
        $this->content = $this->url->contentArray();
        $this->sections();
        return $this;
    }

    protected function sections()
    {
        //divid file into section
        $botName = '*';
        foreach ($this->content as $str)
        {
            if (preg_match("%(User-agent:)(.*)%ism", $str,$m)) {
                $botName = trim($m[2]);
                if (!isset($this->section["User-agent"][$botName])) {
                    $this->section["User-agent"][$botName]  = array();
                }
            } else {

                if( preg_match('%(Sitemap:)(.*)%ism',$str,$m)) {
                    $this->section["User-agent"][$botName]['sitemap'] = trim($m[2]);
                } else if (preg_match('%(Disallow:)(.*)%ism',$str,$m)) {
                    $this->section["User-agent"][$botName]['disallow'][] = trim($m[2]);
                } else if (preg_match("%(Crawl-delay:)(.*)%ism", $str,$m)) {
                    $this->section["User-agent"][$botName]['crawl-delay'] =  trim($m[2]);
                }
            }

        }
    }

    public function siteMapUrl($botName = '*')
    {
        if( isset($this->section["User-agent"][$botName]['sitemap'])) {
            return $this->section["User-agent"][$botName]['sitemap'];
        }
        return "";
    }

    public function disAllow($botName = '*')
    {
        if ( isset($this->section["User-agent"][$botName]['disallow'])) {
            return $this->section["User-agent"][$botName]['disallow'];
        }
        return "";
    }
}