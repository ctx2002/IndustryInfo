<?php
namespace Softwarewisdom\Crawler\Text;
class Analyzer
{
    public function process($text)
    {
        $name  = $this->name($text);
        $email = $this->email($text);
        $address = $this->address($text);
        $phone = $this->phone($text);
        $site = $this->website($text);
        $cat = $this->category($text);
        return \json_encode([$name, $email,$address,$phone,$site,$cat]);
    }

    protected function website($text)
    {
        //<a href="http://www.gmdesigns.co.nz" itemprop="url"
        $p="%<div class=\"action\">(.*?)</div>%ism";
        if( preg_match_all($p, $text, $match) ) {
            foreach ($match as $items) {
                foreach ($items as $item) {
                    //$pa = "%<a href= itemprop=\"url\"%";
                    $pa="%<a(.*?)href(.*?)=(.*?)('|\")(.*?)('|\")(.*?)itemprop%ism";
                    if (preg_match($pa, $item, $m)) {
                        return $m[5];
                    }
                }
            }
        }
        return "";
    }

    protected function phone($text)
    {
        //<p>Contact: <a data-display="03 218 2429" class="display_mask"
        $p="%Contact:(.*?)<a(.*?)data-display(.*?)=(.*?)('|\")(.*?)('|\")%ism";
        preg_match($p, $text, $match);
        if (isset($match[6])) return $match[6];

        //no contact number:
        //<a href="tel:03-337 9470" class="button showOnMobile"><span class="label">Primary </span><span>03-337 9470</span></a>
        $p="%<a(.*?)href(.*?)=(.*?)('|\")(.*?)('|\")(.*?)showOnMobile%ism";
        $p = "%<div(\s)*class(\s)*=(\s)*('|\")numbers-container('|\")>(.*?)</div>%ism";
        if( preg_match_all($p, $text, $match) ) {
            foreach ($match as $items) {
                foreach ($items as $item) {
                    $pa = "%<a(\s)*href(\s)*=(\s)*('|\")tel:(.*?)('|\")%ism";
                    if (preg_match($pa, $item, $m)) {
                        return $m[5];
                    }
                }
            }
        }

        return "";
    }
    protected function address($text)
    {
        $p="%bookmark-address(.*?)=(.*?)('|\")(.*?)('|\")%ism";
        preg_match($p, $text, $match);
        if (isset($match[4])) return $match[4];
        return "";
    }
    protected function email($text)
    {
        //<p class="action-share-business-container bookmark">
        $p="%bookmark-email(.*?)=(.*?)('|\")(.*?)('|\")%ism";
        preg_match($p, $text, $match);
        if (isset($match[4])) return $match[4];
        return "";
    }

    protected function category($text)
    {
        //<section class="card"></section>
        $p="%<(\s)*section(.*?)class(.*?)=('|\")card('|\")>(.*?)</section>%ism";
        preg_match_all($p, $text, $match);
        foreach ($match as $items) {
            foreach ($items as $item) {
                $str = strip_tags( $item);
                if( preg_match("%Categories(.*?)listed(.*?)in(.*)%ism",$str, $m) ) {
                    $temp = trim( $m[3]);
                    //$temp = preg_replace("%\p{C}+%uism",'#', $temp);
                    $temp = preg_replace('/\s{2,}/', '#', $temp);
                    return $temp;
                }

            }
        }
        return "";
    }

    protected function name($text)
    {
        //^<div class=\"Message\">.*</div>$
        $p = "%<section id=\"businessDetailsPrimary\">(.*)<h1(.*?)<span(.*?)>(.*?)</span>.*%ism";
        preg_match($p, $text, $match);
        if (isset($match[4])) return $match[4];
        return "";
    }
}