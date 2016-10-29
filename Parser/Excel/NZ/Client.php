<?php

namespace Softwarewisdom\Crawler\Parser\Excel\NZ;

use PHPExcel_IOFactory;

class Client
{

    private $url;
    public function __construct()
    {
        $this->url = "http://www.stats.govt.nz/~/media/Statistics/surveys-and-methods/methods/class-stnd/industrial-classification/classification-anzsic06-level4-v1-0.xls";
    }

    public function fetch()
    {
        $reader = $this->open();
        //TODO: for each industry name, we have to save store it somewhere.
        //or may be send each industry name to a gear job server?
    }

    private function open()
    {
        $file = tempnam(sys_get_temp_dir(), 'excel_');
        $h = fopen($file, "r");
        $errorStr = "";
        $content = "";
        if (!$h) {
            $errorStr = "Unable to open php temp stream.";
            $error = error_get_last();
            if (!is_null($error)) {
                $errorStr .= "[".$error['message']."]";
            }
        } else {
            $content = file_get_contents($this->url);
            if (!$content) {
                $errorStr = "Unable to open " . $this->url;
            }
        }

        if ($errorStr == '') {
            $b = fwrite($h, $content);
            if(!$b) {
                $errorStr = "Unable write to handler.";
            }
        }
        fclose($h);
        if ($errorStr == '') {
            $obj = PHPExcel_IOFactory::load($file);
            unlink($file);
            return $obj;
        } else {
            throw new \Exception($errorStr);
        }
    }
}