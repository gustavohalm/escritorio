<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //
    protected $fillable = ['name', 'cnpj', 'city', 'observation', 'type', 'ie', 'nirf', 'ccir'];
    protected $table = "farms";

}
