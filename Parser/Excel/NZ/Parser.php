<?php
namespace Softwarewisdom\Crawler\Parser\Excel\NZ;
use \PHPExcel;
use Softwarewisdom\Crawler\Parser\Excel\NZ\ReaderFilter;
/**
this class is used to fetch an industry name
 ***/
class Parser
{
    /** @var \PHPExcel ***/
    private $reader;
    public function __construct(\PHPExcel $reader)
    {
        $this->reader = $reader;
    }

    public function run()
    {
        $sheetData = $this->reader->getActiveSheet()->toArray(null,true,true,true);
        return $sheetData;
    }
}