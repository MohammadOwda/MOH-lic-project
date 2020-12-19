<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class University extends Eloquent
{
    protected $table = "C_UNIV_TB";
    protected $primaryKey = 'UNIV_CODE';
    protected $fillable = [
        'UNIV_TITLE'
    ];
    
    public static function getUniversity(){
        $uni = University::all();
        return $uni;
    }
}