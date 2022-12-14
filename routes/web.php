<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductFilter;

use Illuminate\Support\Facades\Route;

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
Route::get('/form',[FormController::class,'index']);
Route::post('/form',[FormController::class,'formSubmit'])->name('form.formsubmit');
Route::get('/product',[ProductFilter::class,'product']);