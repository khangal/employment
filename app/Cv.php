<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }
    
    public function jobs()
    {
        return $this->belongsToMany('App\Job');
    }
}
