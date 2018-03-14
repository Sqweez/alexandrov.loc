<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesForBanned extends Model
{
    protected $table = 'messages_for_banned_users';
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
