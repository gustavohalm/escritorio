<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParnershipAgricultural extends Model
{
    //
    protected $fillable =['farmer_id', 'agricultural_id', 'percent'];
    protected $table = 'parnership_agriculturals';
    
    public function farmer()
    {
        return $this->belongsTo('App\Farmer');
    }
    public function agricultural()
    {
        return $this->belongsTo('App\Agricultural');
    }
    

}
