<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $table = 'category_product';
    protected $fillable = ['id', 'name', 'status', 'slug', 'parent', 'alt'];
    public function searchableAs()
    {
        return 'name';
    }

    public function toSearchableArray()
    {

        $array = $this->toArray();
        return $array;
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent')->where('parent', 0)->with('parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent')->with('children');
    }

    public function parentItem()
    {
        return $this->belongsTo('App\Models\Category', 'parent', 'id');
    }
}
