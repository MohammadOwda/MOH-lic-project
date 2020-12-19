<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Martial_status extends Eloquent
{
    protected $table = "C_MARTIAL_STATUS_TB";
    protected $primaryKey = 'MS_CODE';
    protected $fillable = [
        'MS_NAME_AR'
    ];
    
    public static function getMartialStatus(){
        $status = Martial_status::all();
        return $status;
    }
}

