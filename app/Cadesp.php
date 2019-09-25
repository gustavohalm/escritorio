<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadesp extends Model
{
    //

    protected $fillable = ['nirf', 'ccir', 'hectar_nirf', 'hectar_ccir', 'matricula', 'farm_id'];
    protected $table = 'cadesps';

    
}
