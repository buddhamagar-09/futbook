<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{


    public function Order_items()
    {
        return $this->hasMany(Order_items::class, 'order_id');
    }
}