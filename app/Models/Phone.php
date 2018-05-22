<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
       protected $fillable = [
        'brand',
        'logo'
    ]; 

    public function models(){
        return $this->hasMany('App\Models\Model');
    }
}
