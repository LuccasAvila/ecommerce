<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Categories() {
        return $this->belongsToMany(Category::class);
    }
}
