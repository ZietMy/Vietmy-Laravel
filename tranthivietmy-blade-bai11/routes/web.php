<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
// Route::get('/admin/product/post',function (Request $request){
//     // return 'url: '.$request->fullUrlWithQuery(['name'=>'vuthanhtai']);
//     if ($request->is('admin/*')){
//         return 'Request path matches with "admin\*" path';
//     }
// });
Route::get('/', [FormController::class, 'index' ]);
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/sanpham',[HomeController::class,'products'])->name('product');
Route::get('/them-san-pham',[HomeController::class,'getAdd']);
//Route::post('/them-san-pham',[HomeController::class,'postAdd']);
Route::put('/them-san-pham',[HomeController::class,'putAdd']);
