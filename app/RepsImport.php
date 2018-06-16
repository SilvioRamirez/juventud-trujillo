<?php 
namespace App;
use Maatwebsite\Excel\Files\ExcelFile;
 
class RepsImport extends ExcelFile {

    public function getFile()
    {
        return public_path() . '/data.csv';
    }
    public function getFilters()
    {
        return [
            'chunk'
        ];
    }
}