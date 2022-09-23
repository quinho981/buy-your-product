<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'description',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the products that owns the description.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
