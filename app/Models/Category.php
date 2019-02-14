<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent_category(){
        return $this->belongsTo(Category::class);
    }
    public function  child_category(){
        return $this->hasMany(Category::class);
    }
}
