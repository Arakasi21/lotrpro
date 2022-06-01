<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['imagePath', 'title', 'description', 'price'];

    public function ReviewData()
    {
        return $this->hasMany('App\Models\ReviewRating','product_id');
    }
}
