<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 
        'product_image',
        'price',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the category for the products.
     */
    public function category()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the description associated with the products.
     */
    public function product_description()
    {
        return $this->hasOne(ProductDescription::class);
    }

    /**
     * Get the order_item that owns the product.
     */
    public function order_item()
    {
        return $this->belongsTo(OrderItem::class, 'order_items_id');
    }
}
