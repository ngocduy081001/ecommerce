<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorSize extends Model
{
    use HasFactory;

    protected $table = 'color_size';
    protected $fillable = ['color_id', 'size_id', 'product_id', 'image', 'price'];
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
