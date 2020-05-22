<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'details',
        'price',
        'rating',
        'description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
