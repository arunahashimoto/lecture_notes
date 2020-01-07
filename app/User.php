<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $gurded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    );

    public function getDate()
    {
        return $this->id . ':' . $this->name;
    }

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function purchased_item()
    {
        return $this->belongsToMany('App\Item',);
    }

}
