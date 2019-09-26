<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cadesp;
class Farm extends Model
{
    //
    protected $fillable = ['name', 'cnpj', 'city', 'observation', 'type', 'ie', 'nirf', 'ccir', 'matricula'];
    protected $table = "farms";

    public function cadesps()
    {
        return $this->hasMany('App\Cadesp', 'farm_id');
    }

    public function partnerships()
    {
        return $this-hasMany('App\PartnershipFarm', 'farm_id');
    }
}
