<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $data = [
            'content' => 'admin.settings.index',
            'heroImage' => $settings['hero_image'] ?? null,
            'aboutImage' => $settings['about_image'] ?? null,
            'headerLogo' => $settings['header_logo'] ?? null,
        ];

        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('hero_image')) {
            $request->validate(['hero_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120']);
            $imageName = 'hero-' . time() . '.' . $request->hero_image->extension();
            $request->hero_image->move(public_path('images'), $imageName);
            Setting::updateOrCreate(
                ['key' => 'hero_image'],
                ['value' => '/images/' . $imageName]
            );
        }

        if ($request->hasFile('header_logo')) {
            $request->validate(['header_logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120']);
            $imageName = 'header-' . time() . '.' . $request->header_logo->extension();
            $request->header_logo->move(public_path('images'), $imageName);
            Setting::updateOrCreate(
                ['key' => 'header_logo'],
                ['value' => '/images/' . $imageName]
            );
        }

        if ($request->hasFile('about_image')) {
            $request->validate(['about_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120']);
            $imageName = 'about-' . time() . '.' . $request->about_image->extension();
            $request->about_image->move(public_path('images'), $imageName);
            Setting::updateOrCreate(
                ['key' => 'about_image'],
                ['value' => '/images/' . $imageName]
            );
        }

        return redirect('/admin/settings')->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
