<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//------------------------------



//--------------------------------



// stars-restaurants.com/ => inicio
Route::view('/', 'home');

// stars-restaurants.com/locales => restaurantes
//--------------------------------------------------------------------------------------
// Route::view('/locales', 'locales',['dataLocales'=>$dataLocales])->name('locales');
Route::get('/locales',[LocalesController::class, 'metodo1'])->name('locales');
Route::view('/locales/register','register_locales')->name('localesRegister');
//--------------------------------------------------------------------------------
// stars-restaurants.com/places => ubicacion
Route::view('/places', 'places')->name('places');

// stars-restaurants.com/about => acerca
Route::view('/about', 'about')->name('about');

// stars-restaurants.com/contact => contactos
Route::view('/contact', 'contacts')->name('contact');

// stars-restaurants.com/seach => buscar
Route::get('/seach', function () {
    return view('seach');
})->name('seach');


//----------------------------------------------------------------

// stars-restaurants.com/register=> Registrar
Route::get('/register',[RegisterController::class,'show']);

// stars-restaurants.com/register=> Registrar -POST
Route::post('/register', [RegisterController::class,'register']);

//----------------------------------------------------------------

// stars-restaurants.com/login => Logear

Route::get('/login',[LoginController::class,'show']);

// stars-restaurants.com/login=> login -POST
Route::post('/login', [LoginController::class,'login']);

//-----------------------------------------------------------------

// stars-restaurants.com/home => inicio
Route::get('/home', [HomeController::class,'show'])->name('home');

//--------------------------Logout---------------------------------

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');