<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'status',
        'order_created'
    ];

    /**
     * Get the order_item associated with the order.
     */
    public function order_item()
    {
        return $this->hasMany(OrderItem::class);
    }
}