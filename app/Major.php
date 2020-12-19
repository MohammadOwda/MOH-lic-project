<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Major extends Eloquent
{
    protected $table = "C_MAJOR_TB";
    protected $primaryKey = 'MJ_CODE';
    protected $fillable = [
        'MJ_TITLE',
        'JOB_TITLE',
        'MJ_GROUP'

    ];

    public static function getMajor(){
        $major = Major::all();
        return $major;
    }
}
