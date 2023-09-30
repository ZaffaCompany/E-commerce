<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(2);
    }

}
