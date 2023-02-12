<?php

use App\Http\Controllers\CcCountroller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FarineController;
use App\Http\Controllers\PateController;
use App\Http\Controllers\UppaController;
use App\Http\Controllers\UpdelController;
use App\Http\Controllers\CousController;
use App\Http\Controllers\EffCountroller;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TotalController;
use App\Models\Client;
use App\Models\Cous;
use App\Models\Farine;
use App\Models\Pate;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $ff = Farine::where('user', Auth::user()->name)->get('valeur')->sum('valeur');

    $f = Pate::where('user', Auth::user()->name)->get('valeur')->sum('valeur');
    $fff = Cous::where('user', Auth::user()->name)->get('valeur')->sum('valeur');
    $t = Profile::where('user', Auth::user()->name)->get();
    $g = Client::all();
    if (Auth::check()) {

        if (Auth::user()->role == '1') {
            return view('empty', compact('g'));
        } else {

            return view('dashboard', compact('ff', 'f', 'fff', 't'));
        }
    }
})->middleware(['auth'])->name('dashboard');

Route::resource('farine', FarineController::class);
Route::post('gg', [UpdelController::class, 'update'])->name('gg.update');
Route::delete('ggg', [UpdelController::class, 'del'])->name('ggg.del');
Route::resource('pate', PateController::class);
Route::post('up', [UppaController::class, 'index'])->name('up.index');
Route::delete('up', [UppaController::class, 'dell'])->name('up.dell');
Route::resource('co', CousController::class);
Route::post('e', [EffCountroller::class, 'upp'])->name('e.upp');
Route::delete('ee', [EffCountroller::class, 'de'])->name('ee.de');
Route::resource('cli', ClientController::class);
Route::post('c', [CcCountroller::class, 'int'])->name('c.int');
Route::delete('cc', [CcCountroller::class, 'de'])->name('cc.de');
Route::resource('to', TotalController::class);
Route::resource('ma', FileController::class);
Route::resource('pr', ProfileController::class);

Route::get('/send', function () {
    Mail::to('ss3438088@gmail.com')->send(new OrderShipped("saad"));
    return "succe";
});

require __DIR__ . '/auth.php';