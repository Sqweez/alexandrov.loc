<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments_table';
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo('\App\User', 'user_id');
    }
    public function parent_comment(){
    	return $this->belongsTo('\App\Comments', 'parent_id');
    }
    public function answer_comment(){
    	return $this->hasMany('\App\Comments', 'parent_id');
    }
}
