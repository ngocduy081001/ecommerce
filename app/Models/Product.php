<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


use Laravel\Scout\Searchable;

class Product extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'product';
    protected $fillable = ['id', 'name', 'status', 'slug', 'description', 'alt', 'detail', 'view', 'category_id', 'code', 'price', 'price_sale', 'image'];

    public function searchableAs()
    {
        return 'name';
    }

    public function toSearchableArray()
    {

        return [
            'name',
            'category_product.name'
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

    public function colorSize(): HasMany
    {
        return $this->hasMany(ColorSize::class, 'product_id');
    }

    public function color()
    {
        return $this->hasMany(ProductColor::class, 'product_id');
    }
    public function size()
    {
        return $this->hasMany(ProductSize::class, 'product_id');
    }
}
