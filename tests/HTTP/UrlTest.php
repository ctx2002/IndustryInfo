<?php
namespace Softwarewisdom\Crawler\Test\HTTP;
use PHPUnit\Framework\TestCase;
use Softwarewisdom\Crawler\HTTP\Url;
class UrlTest extends TestCase
{
    public function testOneBaseUri()
    {
        $url = new Url("http://google.com/path");
        $actual = $url->baseUri();
        $this->assertEquals("http://google.com",$actual);
    }

    public function testTwoBaseUri()
    {
        $url = new Url("google.com/path");
        $actual = $url->baseUri();
        $this->assertEquals("google.com",$actual);
    }
}