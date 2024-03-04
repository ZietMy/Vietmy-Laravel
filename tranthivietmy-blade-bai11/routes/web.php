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
// Route::prefix('category')->group(function () {
//     // Danh sách chuyên mục
//     Route::get('/', [CategoryController::class, 'index'])->name('category.list');
//     Route::get('/edit/{id}', [CategoryController::class, 'getCategory'])->name('category.edit');;
//     Route::post('', [CategoryController::class, 'updateCategory']);
//     Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
//     Route::post('/add', [CategoryController::class, 'showCategory']);
//     Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory']);
//     Route::post("/upload", [CategoryController::class, 'Handlefile'])->name('category.file');
//     Route::get("/upload", [CategoryController::class, 'getFile']);
// });
// Route::middleware('autho.admin')->prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('products', ProductsController::class)->middleware('auth.admin');
// });
Route::get('/', [FormController::class, 'index' ]);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [HomeController::class, 'products'])->name('products');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
//Route::post('/them-san-pham',[HomeController::class,'postAdd']);
Route::put('/them-san-pham',[HomeController::class,'putAdd']);
