<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function cvs()
    {
        return $this->belongsToMany('App\Cv');
    }
    
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
