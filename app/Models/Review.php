<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'email',
        'product_id',
        'rating',
        'message',
        'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'rating' => 'integer',
    ];

    protected static function booted(): void
    {
        static::created(function (Review $review) {
            if ($review->product) {
                $review->product->updateRatingCache();
            }
        });

        static::updated(function (Review $review) {
            if ($review->product) {
                $review->product->updateRatingCache();
            }
        });

        static::deleted(function (Review $review) {
            if ($review->product) {
                $review->product->updateRatingCache();
            }
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
