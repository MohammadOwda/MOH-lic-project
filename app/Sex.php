<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Sex extends Eloquent
{
    protected $table = "C_SEX_TB";
    protected $primaryKey = 'SEX_CODE';
    protected $fillable = [
        'SEX_NAME_AR'
    ];

    public static function getGender(){
        $Gender = Sex::all();
        return $Gender;
    }
}