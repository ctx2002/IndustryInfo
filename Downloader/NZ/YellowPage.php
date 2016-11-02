<?php

namespace Softwarewisdom\Crawler\Downloader\NZ;
use GuzzleHttp\Client;
use \Wa72\HtmlPageDom\HtmlPage;

class YellowPage
{
    protected $answer;
    public function __construct()
    {
        $this->answer = new Answer();
    }

    public function down()
    {

    }

    public function search($category)
    {
        //form post
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->answer->url(),
            // You can set any number of default request options.
            'timeout'  => 10,
            'verify' => false,
            'headers' => ['User-Agent' => 'wisdom/1.0'],
        ]);

        $response = $client->request('POST', $this->answer->url()."search", [
            'form_params' => [
                'what' => $category,
                'where' => 'New+Zealand',
                'browser_lat' => '',
                'browser_lng' => ''
            ]
        ]);

        $links = $this->fetchLinks($response->getBody()->getContents());
        return $links;
        //TODO: all those links should be save into database
       // var_dump($response->getBody()->getContents());
    }

    public function fetchLinks($htmlPage)
    {
        $page = new HtmlPage($htmlPage);
        $atags = $page->filter("section.pagination ul li a");
        $data = array();
        $count = 1;
        foreach ($atags as $a) {
            if ($count > $this->answer->searchLimit()) break;
            if (ctype_digit($a->nodeValue)) {
                if( $a->attributes) {
                    if( $a->attributes->getNamedItem("href") ) {
                        $data[$a->nodeValue] = $a->attributes->getNamedItem("href")->nodeValue;
                    }
                }
            }
        }
        return $data;
    }


}