<?php

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auto-login', function () {
    try {
        $data = json_decode(decrypt(request('token')), true);

        $user = User::where('email', $data['email'])->first();

        if ($user) {
            Auth::login($user);

            return redirect('http://127.0.0.1:8001/dashboard');
        }
    } catch (\Exception $e) {
        Log::info("Does not log in");
    }
});

Route::get('/remote-logout', function () {
    try {
        $data = json_decode(decrypt(request('token')), true);

        $user = User::where('email', $data['email'])->first();

        if ($user && Auth::check() && Auth::id() === $user->id) {
            Auth::logout();
        }

        return redirect('http://127.0.0.1:8001');
    } catch (\Exception $e) {
        Log::error("Remote logout failed", ['error' => $e->getMessage()]);
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
