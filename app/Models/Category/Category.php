<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parents(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function child(){
    //     return $this->belongsTo(Category::class);
    // }
}
