<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public $timestamps = true;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
