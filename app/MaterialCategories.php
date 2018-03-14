<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialCategories extends Model
{
    protected $guarded = [];

    public function sub(){
    	return $this->hasMany('App\MaterialSubCategories','category_id');
    }

    public function discount(){
    	return $this->hasMany('\App\Discounts', 'category_id');
    }
}
