<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Natunality extends Eloquent
{
    protected $table = "C_NATIONALITY_TB";
    protected $primaryKey = 'NAT_CODE';
    protected $fillable = [
        'NAT_NAME_COUNTRY_AR',
        'NAT_NAME_AR'
    ];



    public static function getNatunality(){
        $nat = Natunality::where('NAT_NAME_AR', '<>', 'null')->get();
        return $nat;
    }
}

