<?php

use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact']);
Route::post('/contact', [\App\Http\Controllers\HomeController::class, 'sendContact']);
Route::get('/products', [\App\Http\Controllers\HomeController::class, 'products']);
Route::post('/review', [\App\Http\Controllers\HomeController::class, 'submitReview']);

Route::get('/login', function (Request $request) {
    if ($request->session()->get('admin_logged_in')) {
        return redirect('/admin/dashboard');
    }

    $data = [
        'content' => 'home.author.login',
        'hideHeader' => true,
        'hideFooter' => true,
    ];
    return view('home.layouts.wrapper', $data);
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'name' => 'required|string',
        'password' => 'required|string',
    ]);

    $user = User::where('name', $request->name)
        ->orWhere('email', $request->name)
        ->first();

    if ($user && Hash::check($request->password, $user->password)) {
        $request->session()->put('admin_logged_in', true);
        return redirect()->intended('/admin/dashboard');
    }

    return back()->withErrors(['login' => 'Username atau password salah'])->withInput();
});

Route::get('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

//======admin-----
Route::prefix('/admin')->middleware(\App\Http\Middleware\AdminAuth::class)->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('/user', UserController::class);
    Route::resource('/products', \App\Http\Controllers\Admin\ProductController::class);

    // Review Management
    Route::get('/reviews', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin.reviews.index');
    Route::get('/reviews/{id}/approve', [\App\Http\Controllers\Admin\ReviewController::class, 'approve'])->name('admin.reviews.approve');
    Route::delete('/reviews/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
    // Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');
});
