<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'restaurant_name', 'image', 'delivery_time'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $user = Auth::user();
            $model->user_id = $user->id;
        });
    }


    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function food()
    {
        return $this->hasMany(Food::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class, 'tag_id', 'id');
    }
}
