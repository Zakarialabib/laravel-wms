<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Livewire\Stock;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Pricings;
use App\Http\Livewire\Customer;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\Product;
use App\Http\Livewire\Delivery;
use App\Http\Livewire\Sale;



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


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/approval', [HomeController::class, 'approval'])->name('users.approval');
Route::post('contact-us', [ HomeController::class, 'saveContact' ])->name('contact-us');

Route::middleware(['auth:sanctum', 'approved','verified'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/sales', [\App\Http\Livewire\Sale::class,'render'])->name('sales');
Route::get('/deliverie', [DeliveriesController::class, 'index'])->name('deliveries');
Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
Route::get('/stock', [StockController::class, 'index'])->name('stock');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/pricings', [PricingController::class, 'index'])->name('pricings');

Route::get('/deliveries/track', [DeliveriesController::class, 'orderTrack'])->name('order.track');
Route::post('deliveries/track/order', [DeliveriesController::class, 'deliveryTrackOrder'])->name('delivery.track.order');

Route::get('/settings', 'App\Http\Controllers\SettingController@index')->name('settings');
Route::post('/settings', 'App\Http\Controllers\SettingController@update')->name('settings.update');

Route::get('post/{id}', \App\Http\Livewire\ShowPosts::class)->name('posts-show');
Route::get('post', \App\Http\Livewire\Posts::class)->name('post');

Route::resource('sales', SalesController::class);
Route::resource('sale', \App\Http\Livewire\Sale::class);
Route::resource('deliveries', DeliveriesController::class);
Route::resource('deliveries', \App\Http\Livewire\Delivery::class);
Route::resource('customer', \App\Http\Livewire\Customer::class);
Route::resource('customers', CustomersController::class);
Route::resource('stock', StockController::class);
Route::resource('stocks', \App\Http\Livewire\Stock::class);
Route::resource('products', ProductsController::class);
Route::resource('product', \App\Http\Livewire\Product::class);
Route::resource('pricings', PricingController::class);
Route::resource('pricing', \App\Http\Livewire\Pricings::class);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::get('/users/{user_id}/approve', [UserController::class, 'approve'])->name('users.approve');
});

