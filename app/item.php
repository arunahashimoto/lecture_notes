<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $gurded = array('id');
    protected $fillable = ['user_id', 'title', 'description', 'price'];

    public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'price' => 'integer|min:0',
    );

    public function getDate()
    {
        return $this->id . ':' . $this->title;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
