<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = array();

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function contentarea()
    {
        return $this->hasMany(Article::class);
    }

    public function csstemplate()
    {
        return $this->hasMany(Article::class);
    }

    public function page()
    {
        return $this->hasMany(Article::class);
    }

    public function createdby()
    {
        return $this->belongsTo(User::class,'created_by_id');
    }

    public function modifiedby()
    {
        return $this->belongsTo(User::class,'modified_by_id');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }


}

User::creating(function($user)
{
    $user->created_by_id = Auth::user()->id;
    $user->modified_by_id = Auth::user()->id;
});
User::updating(function($user)
{
    $user->modified_by_id = Auth::user()->id;
});
