<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ShoppingBaskets($value='')
    {
    	return $this->belongsTo(ShoppingBasket::class, 'id');
    }
}
