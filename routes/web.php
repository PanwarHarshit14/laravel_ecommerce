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
use App\Http\Controllers\Web\ProductController as WebProductController;
use App\Http\Controllers\web\ProductGalleryController;
use App\Http\Controllers\web\ProductPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'ecomm-panel'], function () {
    Route::get("/login", [LoginController::class, 'showlogin'])->name('login');
    Route::post("/login", [LoginController::class, 'doLogin'])->name('login.post');

    Route::group(['middleware' => 'auth:admin', 'as' => 'admin.'], function () {
        Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');
        Route::get('/logout', function () {
            Auth::guard('admin')->logout();
            return redirect(route('login'));
        })->name('logout');

        Route::post('/country/bulk-delete', [CountryController::class, 'bulkDelete'])->name('country.bulk-delete');
        Route::post('/state/bulk-delete', [StateController::class, 'bulkDelete'])->name('state.bulk-delete');
        Route::post('/city/bulk-delete', [CityController::class, 'bulkDelete'])->name('city.bulk-delete');
        Route::post('/pincode/bulk-delete', [PincodeController::class, 'bulkDelete'])->name('pincode.bulk-delete');
        Route::post('/hsncode/bulk-delete', [HsnCodeController::class, 'bulkDelete'])->name('hsncode.bulk-delete');
        Route::post('/product/bulk-delete', [ProductController::class, 'bulkDelete'])->name('product.bulk-delete');
        Route::post('/category/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('category.bulk-delete');

        Route::resources([
            "country" => CountryController::class,
            "state" => StateController::class,
            "city" => CityController::class,
            "pincode" => PincodeController::class,
            "category" => CategoryController::class,
            "product" => ProductController::class,
            "productimg" => ProductImgController::class,
            "hsncode" => HsnCodeController::class,
        ]);
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{category1?}/{category2?}/{category3?}', [WebProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [WebProductController::class, 'show'])->name('product.show');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

// Route::get('/', function () {
//     return view('welcome');
// });
