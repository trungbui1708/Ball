<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guared = ['id'];

    protected $date = [
        'create_at',
        'update_at',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id');
    }

    public function user_roles()
    {
        return $this->hasMany('App\User_Role', 'user_id');
    }

    public function roles()
    {
        return $this->belongstoMany('App\Role', 'user_roles', 'user_id', 'role_id')->withPivot('id');
    }

}
