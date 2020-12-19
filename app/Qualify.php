<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Qualify extends Eloquent
{
    protected $table = "C_QUALIFY_TB";
    protected $primaryKey = 'QUALIFY_CODE';
    protected $fillable = [
        'QUALIFY_TITLE'
    ];

    
    public static function getQualification(){
        $Qualification = Qualify::all();
        return $Qualification;
    }
}