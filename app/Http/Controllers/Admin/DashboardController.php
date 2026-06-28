<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        // Stat Cards
        $totalProducts = Product::count();
        $avgRating = Review::where('is_approved', true)->avg('rating');
        $approvedReviews = Review::where('is_approved', true)->count();

        // Rating Distribution
        $ratingDistribution = collect();
        for ($i = 5; $i >= 1; $i--) {
            $count = Review::where('is_approved', true)->where('rating', $i)->count();
            $ratingDistribution->push([
                'rating' => $i,
                'count' => $count,
            ]);
        }

        // Latest Reviews
        $latestReviews = Review::where('is_approved', true)->latest()->take(5)->get();

        $data = compact(
            'totalProducts',
            'avgRating', 'approvedReviews',
            'ratingDistribution',
            'latestReviews'
        );

        return view('admin.layouts.wrapper', [
            'content' => 'admin.dashboard.index',
            'title' => 'Dashboard',
        ] + $data);
    }
}
