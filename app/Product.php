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
        'weight',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
