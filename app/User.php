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
        'name', 'email', 'password', 'login', 'user_image'
    ];

    public function shops(){
    	return $this->hasMany('App/Shops', 'user_id');
    }
	public function shares(){
		return $this->hasMany('App/Shares', 'user_id');
	}
	public function message_ban(){
    	return $this->hasOne('\App\MessagesForBanned', 'user_id');
	}
	public function comments(){
    	return $this->hasMany('\App\Comments', 'user_id');
	}
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
