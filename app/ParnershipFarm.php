<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParnershipFarm extends Model
{
    //
    protected $fillable =['farm_id', 'farmer_id', 'agricultural_id', 'percent'];
    protected $table = 'parnership_farms';
    
    public function farmer()
    {
        return $this->belongsTo('App\Farmer');
    }


    public function agricultural()
    {
        return $this->belongsTo('App\Agricultural');
    }

}
