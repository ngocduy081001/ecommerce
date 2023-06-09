<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'category_product';
    protected $fillable = ['id','name','status','slug','parent','alt'];

    public function parent()
    {
        return $this->belongsTo('App\Models\Category','parent')->where('parent',0)->with('parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category','parent')->with('children');
    }

    public function parentItem(){
        return $this->belongsTo('App\Models\Category','parent','id');
    }
}
