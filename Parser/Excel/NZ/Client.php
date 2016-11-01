<?php

namespace Softwarewisdom\Crawler\Parser\Excel\NZ;

use PHPExcel_IOFactory;
use Softwarewisdom\Crawler\Parser\Excel\NZ\ReaderFilter;

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
        $parser = new Parser($reader);
        $parser->run();
    }

    private function open()
    {
        $file = tempnam(sys_get_temp_dir(), 'excel_');
        $file = $file.".xls";

        $h = fopen($file, "w");
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
            /** @var \PHPExcel_Reader_Excel5 $obj ***/
            $obj = \PHPExcel_IOFactory::createReader("Excel5");
            $obj->setReadDataOnly(true);
            $obj->setReadFilter(new ReaderFilter());

            $objPHPExcel = $obj->load($file);
            unlink($file);
            return $objPHPExcel;
        } else {
            throw new \Exception($errorStr);
        }
    }
}