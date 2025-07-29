<?php

use App\Http\Controllers\TarifarioController;
use App\Livewire\Gastodestino;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Models;
Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::view('dashboard', 'dashboard')
    // ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/gastodestino', Gastodestino::class)->name('gastodestino');

Route::get('phpinfo', function(){
    phpinfo();
});
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::post('tarifario/import', [TarifarioController::class, 'import'])->name('tarifario.import');

require __DIR__ . '/auth.php';
