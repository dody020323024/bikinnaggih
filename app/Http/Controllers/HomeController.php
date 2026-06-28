<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'home.home.index',
            'products' => Product::where('is_active', true)->get(),
            'reviews' => Review::where('is_approved', true)->latest()->get(),
            'heroImage' => Setting::getValue('hero_image'),
            'aboutImage' => Setting::getValue('about_image'),
            'headerLogo' => Setting::getValue('header_logo', '/images/logo.png'),
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function about()
    {
        $data = [
            'content' => 'home.about.index',
            'headerLogo' => Setting::getValue('header_logo', '/images/logo.png'),
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function products()
    {
        $data = [
            'content' => 'home.services.index',
            'products' => Product::where('is_active', true)->get(),
            'headerLogo' => Setting::getValue('header_logo', '/images/logo.png'),
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function contact()
    {
        $data = [
            'content' => 'home.contact.index',
            'headerLogo' => Setting::getValue('header_logo', '/images/logo.png'),
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required'
        ]);

        \App\Models\ContactMessage::create($request->all());

        return redirect('/#contact')->with('success', 'Pesan Anda berhasil dikirim. Terima kasih telah menghubungi kami!');
    }

    public function submitReview(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable|string|max:1000',
        ]);

        Review::create($validated);

        return redirect('/#reviews')->with('review_success', 'Terima kasih! Kritik dan saran Anda telah kami terima.');
    }
}
