<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EventController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Type;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/', [EventController::class, 'index']);



Route::group(['middleware' => ['web']], function () {
    
    Route::get('lang/{lang}', function ($lang) {
            session(['lang' => $lang]);
            App::setLocale($lang);
            return Redirect::back();
        })->where([
            'lang' => 'eu|en'
        ]);
    });


//Route::get('/',  [App\Http\Controllers\AppController::class, 'getData'] );

Route::get('/second', [AppController::class, 'refresh'])->name('get.data2');
//Resource para insertar la imagen
Route::get('/registerStore', function () {
    return view('auth.register');
})->name('registerStore');
Route::post('/userStore', [App\Http\Controllers\UserController::class, 'store'])->name('user.store'); 





//para verificar lso que estan dentro de middleware "verified"
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/adminPage', [UserController::class, 'admin'])->name('adminBlade');

Route::get('/register2', [RegisterController::class, 'create'])->name('Register');

Route::get('/createEvent', function () {

    $type=Type::all();

    return view('createEvent',['typeList'=> $type]);
})->name('createEvent');

Route::post('/eventStore', [EventController::class, 'store'])->name('event.store.admin');

