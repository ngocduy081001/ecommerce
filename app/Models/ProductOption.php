<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    protected $table = 'product_option';
    protected $fillable = ['group_option', 'option_id', 'product_id', 'price','price_sale','image','stock'];
}
