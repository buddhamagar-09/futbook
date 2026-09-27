<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Order_items()
    {
        return $this->hasMany(Order_items::class, 'product_id');
    }
}