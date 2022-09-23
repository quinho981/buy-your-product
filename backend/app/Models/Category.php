<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'category_name',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the products that owns the category.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
