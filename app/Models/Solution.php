<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Solution extends BaseModel
{
     protected $fillable = [
        'description', 'image', 'problem_id'
    ]; 

    public function problem(){
        return $this->belongsTo('App\Models\Problem', 'problem_id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
