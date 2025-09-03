<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('root');



Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
->name('dashboard');

Auth::routes(
    [
        'register' => false
        ]
    );
    
    Route::middleware(['auth'])->group(function () {
        Route::redirect('settings', 'settings/profile');
        
        Route::get('settings/profile', Profile::class)->name('settings.profile');
        Route::get('settings/password', Password::class)->name('settings.password');
        Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    });
    
    require __DIR__.'/auth.php';
    
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });