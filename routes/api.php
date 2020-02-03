<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::resource('categories', 'CategoryController',['except'=>'craete','edit']);
Route::resource('brands', 'BrandController', ['only' => ['index', 'show']]);
Route::resource('products', 'ProductController', ['only' => ['index', 'show']]);
Route::resource('productsdetails', 'ProductDetailController', ['only' => ['index', 'show']]);
Route::resource('customers', 'CustomerController', ['only' => ['index', 'show']]);
Route::resource('addresses', 'AddressController', ['only' => ['index', 'show']]);
Route::resource('orders', 'OrderController', ['only' => ['index', 'show']]);
Route::resource('sales', 'SaleController', ['only' => ['index', 'show']]);
Route::resource('carousels', 'CarouselController', ['only' => ['index', 'show']]);
Route::resource('user', 'UserController',['except'=>'craete','edit']);
