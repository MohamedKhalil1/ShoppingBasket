<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ShoppingBaskets()
    {
    	return $this->belongsTo(ShoppingBasket::class, 'shopping_basket_id', 'id');
    }

    public function categories()
    {
    	return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
