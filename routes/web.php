<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FrontendSectionController;
use App\Http\Livewire\FrontSection;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\Stock;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Pricings;
use App\Http\Livewire\Customer;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\Product;
use App\Http\Livewire\Delivery;
use App\Http\Livewire\Messages;
use App\Http\Livewire\CreateMessage;
use App\Http\Livewire\Sales;

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

    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::resource('dashboard', DashboardController::class);
        Route::get('frontsection', FrontSection::class);
    });

    Route::group(['middleware' => ['role:vendors']], function () {
        //
    });


    Route::get('/deliverie', [DeliveriesController::class, 'index'])->name('deliveries');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/pricings', [PricingController::class, 'index'])->name('pricings');
    Route::get('/deliveries/track', [DeliveriesController::class, 'orderTrack'])->name('order.track');
    Route::post('deliveries/track/order', [DeliveriesController::class, 'deliveryTrackOrder'])->name('delivery.track.order');
    Route::get('/settings', 'App\Http\Controllers\SettingController@index')->name('settings');
    Route::post('/settings', 'App\Http\Controllers\SettingController@update')->name('settings.update');

    Route::get('/transactions', Transactions::class);
    Route::get('post/{id}', ShowPosts::class)->name('posts-show');
    Route::get('post', Posts::class)->name('post');
    Route::get('sale', Sales::class)->name('sale');
    Route::get('deliveries', Delivery::class);
    Route::get('customer', Customer::class)->name('customer');
    Route::get('stocks', Stock::class)->name('stock');
    Route::get('product', Product::class);
    Route::get('pricing', Pricings::class);
    Route::get('message', Messages::class)->name('message_index');
    Route::get('message/create', CreateMessage::class)->name('message.create');

    Route::resource('deliveries', DeliveriesController::class);
    Route::resource('stock', StockController::class);
    Route::resource('products', ProductsController::class);
    Route::resource('pricings', PricingController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/users/{user_id}/approve', [UserController::class, 'approve'])->name('users.approve');
});
