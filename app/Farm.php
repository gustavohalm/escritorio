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
        return $this->has_many('App\Cadesp', 'farm_id');
    }

}
