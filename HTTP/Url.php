<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/18/2017
 * Time: 3:08 PM
 */

namespace Softwarewisdom\Crawler\HTTP;
use Softwarewisdom\Crawler\Tools\AString;

class Url
{
    /**
     * @var string
     */
    private $url;

    /**
     * Url constructor.
     * @param $url
     */
    public function __construct($url)
    {

        $this->url = $this->fixUrl($url);

    }

    /**
     * @param $url
     * @return string
     */
    private function fixUrl($url)
    {
        $str = new AString($url);
        if (
            !$str->startWith("http") &&
            !$str->startWith("//")) {
            return "//".$url;
        }
        return $url;
    }

    /**
     * @return mixed|string
     */
    public function baseUri()
    {

        if ($this->scheme()) {
            return $this->scheme() . "://" . $this->host();
        }

        return $this->host();
    }

    /**
     * @return mixed
     */
    public function scheme()
    {
        return parse_url($this->url, PHP_URL_SCHEME);
    }

    /**
     * @return mixed
     */
    public function host()
    {
        return parse_url($this->url, PHP_URL_HOST);
    }

    public function path()
    {
        //PHP_URL_PATH
        return parse_url($this->url, PHP_URL_PATH);
    }
}