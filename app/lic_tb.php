<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;
use Illuminate\Support\Facades\DB;


class lic_tb extends Eloquent
{
    protected $table = "JOB_LIC_TB";
    protected $primaryKey = 'JOB_SERIAL';
    protected $fillable = [
        'JOB_SERIAL',
        'JOB_LIC_ID'

    ];
    public static function getNextSerial(){
        $Max = DB::table('JOB_LIC_TB')->max('JOB_SERIAL');
        return $Max + 1;
    }

    
}