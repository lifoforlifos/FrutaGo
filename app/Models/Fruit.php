<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'pays_origin', 'price'
    ];

    public function orders_fruit()
    {
        return $this->hasMany(Order_Fruit::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
