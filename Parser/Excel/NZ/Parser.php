<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/29/2016
 * Time: 9:22 PM
 */

namespace Softwarewisdom\Crawler\Parser\Excel\NZ;

/**
this class is used to fetch an industry name
 ***/
class Parser
{
    /** int which row of industry name*/
    private $row;
    /** int which column of industry name**/
    private $column;
    public function __construct($row,$column)
    {
        $this->row = $row;
        $this->column = $column;
    }

    public function run()
    {

    }
}