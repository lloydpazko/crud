<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\resources\auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';//this is shit

// Route::get('/Insert', function(){
//     return view('Insert');
// });
route::get('/Insert/create', [ProductController::class, 'Insert'])->name('Insert');
Route::post('/Insert/store', [ProductController::class, 'store'])->name('store');

Route::get('/ProductList', function(){
    return view('ProductList');
});



route::group(['as' =>"ProductList.",], function()
{
    // Route::get('/ProductList', [ProductController::class, 'ProductList'])->name('ProductList');//index
    route::get('/ProductList',['uses' => 'ProductController@ProductList', 'as' => 'index']);
    route::get('/ProductList/create',['uses' => 'ProductController@Insert', 'as' => 'Insert']);
    route::get('/ProductList/edit/{id}',['uses' => 'ProductController@edit', 'as' => 'edit']);
    route::put('/ProductList/update/{id}',['uses' => 'ProductController@update', 'as' => 'update']);
    route::post('/ProductList/store',['uses' => 'ProductController@store', 'as' => 'store']);
    route::delete('/ProductList/{id}',['uses' => 'ProductController@Destroy', 'as' => 'destroy']);
});
