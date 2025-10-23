<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductsController;
//user
Route::get('/', [HomeController::class, 'welcome'])->name("home.welcome");//trang chu
Route::get('/about', [HomeController::class, 'about'])->name("home.about");//trang gioi thieu
route::get('/products',[ProductsController::class,'index'])->name('products.index');//trang san pham
route::get('/products/show/{id}',[ProductsController::class,'show'])->name('products.show');//trang chi tiet san pham
//admin
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");//trang chu admin
Route::get('/admin/productsmanagement', 'App\Http\Controllers\Admin\AdminHomeController@productsmanagement')->name("admin.home.productsmanagement");//trang ds san pham
route::get('/admin/home/createproduct',[AdminHomeController::class,'createproduct'])->name('admin.home.createproduct');// trang them sp
route::post('/admin/product/store', [AdminProductsController::class, 'store'])->name('admin.home.store');// them sp