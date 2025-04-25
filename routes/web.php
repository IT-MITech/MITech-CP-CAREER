<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('dashboard');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin', fn() => view('admin.dashboard'))->name('admin.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', fn() => view('staff.dashboard'))->name('staff.dashboard');
});

Route::middleware(['auth', 'role:TAA'])->group(function () {
    Route::get('/TAA', fn() => view('client.dashboard'))->name('client.dashboard');
});

Route::middleware(['auth', 'role:TA'])->group(function () {
    Route::get('/TA', fn() => view('guest.dashboard'))->name('guest.dashboard');
});

Route::get('/redirect-by-role', function () {
    $role = auth()->user()->role;
    return match($role) {
        'superadmin' => redirect()->route('superadmin.dashboard'),
        'admin' => redirect()->route('admin.dashboard'),
        'TAA' => redirect()->route('TAA.dashboard'),
        'TA' => redirect()->route('TA.dashboard'),
        default => abort(403)
    };
});