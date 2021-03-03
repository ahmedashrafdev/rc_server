<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}