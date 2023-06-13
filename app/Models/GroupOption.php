<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroupOption extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected $table = 'option_group';

    public function option(): HasMany
    {
        return $this->hasMany(Option::class, 'group_option_id', 'id');
    }
}
