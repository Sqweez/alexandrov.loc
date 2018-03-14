<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    protected $table = 'shops_table';
	protected $guarded = [];
    public function shares(){
    	return $this->hasMany('App\Shares', 'shop_id');
    }
    public function user(){
    	return $this->hasOne('App\User', 'user_id');
    }
}
