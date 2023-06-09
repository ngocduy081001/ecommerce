<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'product';
    protected $fillable = ['id','name','status','slug','description','alt','detail','price','price_sale','stock','thumb','image','image_detail_id','view'];

    public function category():BelongsTo
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
