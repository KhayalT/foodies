<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public $table = 'food';

    protected $fillable = ['food', 'restaurant_id', 'tag_id', 'price', 'image'];


    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }
}
