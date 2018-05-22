<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Problem extends BaseModel
{
     
      protected $fillable = [
        'type', 'topic', 'description','model_id'
    ]; 

    public function model(){
        return $this->belongsTo('App\Models\Model', 'model_id');
    }


    public function solutions(){
        return $this->hasMany('App\Models\Solution');
    }
    
}
