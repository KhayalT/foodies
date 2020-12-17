<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_name', 'price', 'image', 'delivery_time'];

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
