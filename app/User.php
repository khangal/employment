<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    public function access()
    {
        return $this->belongTo('App\Access');
    }
    
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    
    public function works()
    {
        return $this->hasMany('App\Work');
    }
    
    public function educations()
    {
        return $this->hasMany('App\Education');
    }
    
    public function cv()
    {
        return $this->hasOne('App\Cv');
    }
    
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
