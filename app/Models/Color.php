<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Color extends Model
{
    use HasFactory;

    protected $table = 'color';
    protected $fillable = ['name'];


    public function hasProduct()
    {
        return $this->hasMany('App\Models\ProductColor','color_id','id');
    }
}
