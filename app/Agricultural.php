<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agricultural extends Model
{
    //
    protected $fillable = ['name', 'cnpj'];
    protected $table = "agriculturals";
}
