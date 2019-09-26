<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    protected $fillable = ['name', 'cpf'];
    protected $table = "farmers";

    public function partnerships_farms()
    {
        return $this->hasMany('App\PartinershipFarm', 'farmer_id');
    }

    public function partnerships_agriculturals()
    {
        return $this->hasMany('App\PartinershipAgricultural', 'agricultural_id');
    }
}
