<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //

    protected $primaryKey = 'idancashprovinces';
    protected $table = 'ancashprovinces';

    protected $fillable = [
        'idancashprovinces', 'poblacion', 'casos', 'recuperados','fallecidos'
    ];

}
