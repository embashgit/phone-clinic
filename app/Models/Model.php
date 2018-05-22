<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
      
      protected $fillable = [
        'name',
        'number',
        'image',
        'category',
        'os', 
        'phone_id'
    ]; 

    public function problems(){
        return $this->hasMany('App\Models\Problem');
    }

    public function phone(){
    	return $this->belongsTo('App\Models\Phone', 'phone_id');
    }
}
