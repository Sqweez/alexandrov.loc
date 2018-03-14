<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageForDiscounts extends Model
{
    protected $table = 'messages_for_discounts';
    protected $guarded = [];
    public function discount(){
    	return $this->belongsTo('\App\Discounts', 'discount_id');
    }
}
