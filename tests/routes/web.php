<?php

use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HsnCodeController;
use App\Http\Controllers\PincodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImgController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\ProductGalleryController;
use App\Http\Controllers\web\ProductPageController;
use App\Models\HsnCode;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'ecomm-panel','as'=>'admin.'], function(){
    Route::get('/',[DashBoardController::class,'index'])->name('dashboard');
    Route::get("/login",[LoginController::class,'showlogin'])->name('login');

    Route::resources([
        "country" => CountryController::class,
        "state" => StateController::class,
        "city" => CityController::class,
        "pincode" => PincodeController::class,
        "category" => CategoryController::class,
        "product" => ProductController::class,
        "productimg" =>ProductImgController::class,
        "hsncode" => HsnCodeController::class,
    ]);
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/productgallery',[ProductGalleryController::class, 'productgallery'])->name('page.productgallery');
Route::get('/productpage',[ProductPageController::class,'productpage'])->name('page.productpage');
Route::get('/cart',[CartController::class,'cart'])->name('cart');

// Route::get('/', function () {
//     return view('welcome');
// });
