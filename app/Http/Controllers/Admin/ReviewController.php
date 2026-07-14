<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'admin.reviews.index',
            'reviews' => Review::with('product')->latest()->get(),
            'title' => 'Kritik & Saran',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function approve($id)
    {
        $review = Review::findOrFail($id);
        $review->update(['is_approved' => !$review->is_approved]);

        return back()->with('success', 'Status review berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Review::findOrFail($id)->delete();
        return back()->with('success', 'Review berhasil dihapus.');
    }
}
