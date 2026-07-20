<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_active',
        'rating_cache',
        'reviews_count',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating_cache' => 'decimal:2',
        'reviews_count' => 'integer',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function approvedReviews()
    {
        return $this->hasMany(Review::class)->where('is_approved', true);
    }

    public function updateRatingCache(): void
    {
        $this->rating_cache = $this->approvedReviews()->avg('rating');
        $this->reviews_count = $this->approvedReviews()->count();
        $this->save();
    }
}
