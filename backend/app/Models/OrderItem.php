<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'unit_price',
        'total_price',
        'observation'
    ];

    /**
     * Get the products for the order_item.
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the order that owns the order_item.
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }
}

