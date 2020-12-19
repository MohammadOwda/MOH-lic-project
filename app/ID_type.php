<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class ID_type extends Eloquent
{
    protected $table = "C_ID_TYPE_TB";
    protected $primaryKey = 'ID_CODE';
    protected $fillable = [
        'ID_NAME-AR',
        'ID_NAME_EN'

    ];

    public static function getId(){
        $idType = ID_type::all();
        return $idType;
    }
}
