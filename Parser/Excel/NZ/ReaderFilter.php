<?php


namespace Softwarewisdom\Crawler\Parser\Excel\NZ;
use \PHPExcel_Reader_IReadFilter;

class ReaderFilter implements PHPExcel_Reader_IReadFilter
{
    public function readCell($column, $row, $worksheetName = '') {
        // Read rows 1 to 508 and columns A to B only
        if ($row >= 3 && $row <= 508) {
            if (in_array($column,range('A','B'))) {
                return true;
            }
        }
        return false;
    }
}