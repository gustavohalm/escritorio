<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParnershipFarm extends Model
{
    //
    protected $fillable =['farm_id', 'farmer_id', 'agricultural_id', 'percent'];
    protected $table = 'parnership_farms';
    
}
