<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialSubCategories extends Model
{
	protected $table = 'materials_sub_categories';
    protected $guarded = [];

	public function discount(){
		return $this->hasMany('App\Discounts', 'subcategory_id');
	}
}
