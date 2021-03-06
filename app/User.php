<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identity',
        'phonenumber',
        'email',
        'password',
        //'city',
        //'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   // public function tasks() {
    //    return $this->hasMany('App\Task');
    //}

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function companies() {
        return $this->hasMany('App\Company');
    }

     public function tasks() {
        return $this->belongsToMany('App\Task');
    }

     public function agreements() {
        return $this->hasMany('App\Agreement');
    }

    //public function agreements() {
        //return $this->belongsToMany('App\Agreement');
   // }

}
