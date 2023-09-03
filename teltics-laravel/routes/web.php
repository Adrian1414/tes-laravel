<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Service;

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
    $product = Product::all();
    $service = Service::all();
    // dd($product);
    return view('home', compact('product', 'service'));
});
