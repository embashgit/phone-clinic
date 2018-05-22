<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Comment extends BaseModel
{
      protected $fillable = [
        'post',
        'solution_id'
    ]; 

    public function solution(){
        return $this->belongsTo('App\Models\Solution');
    }
}
