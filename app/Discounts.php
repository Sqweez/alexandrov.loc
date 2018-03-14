<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    protected $table = 'discounts_table';
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo('\App\User', 'user_id');
    }
    public function shop(){
    	return $this->belongsTo('\App\Shops', 'shop_id');
    }
    public function message(){
    	return $this->hasOne('\App\MessageForDiscounts', 'discount_id');
    }
	public function category(){
		return $this->belongsTo('\App\MaterialCategories', 'category_id');
	}
	public function subcategory(){
		return $this->belongsTo('\App\MaterialSubCategories', 'subcategory_id');
	}
	public function comments(){
    	return $this->hasMany('\App\Comments', 'content_id');
	}
}
