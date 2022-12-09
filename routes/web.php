<?php

use App\Http\Livewire\Admin\BlogComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\DeliveryManComponent;
use App\Http\Livewire\Admin\ManagerComponent;
use App\Http\Livewire\Admin\ProductsComponent;
use App\Http\Livewire\Admin\RoleComponent;
use App\Http\Livewire\Admin\WorkerComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductCategoryComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\WishTableComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/show-wish-table',WishTableComponent::class)->name('wish.table');

Route::get('/', HomeComponent::class)->name('home');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/products/{slug}', ProductDetailsComponent::class)->name('product.details');
Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');
Route::get('/cart', CartComponent::class)->name('shop.cart');
Route::get('/product-category/{slug}', ProductCategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/wish-list', WishTableComponent::class)->name('wish.table');




Route::get('/admin/dashboard',DashboardComponent::class)->name('admin.dashboard');
Route::get('/admin/category',CategoryComponent::class)->name('admin.category');
Route::get('/admin/category/add',CategoryComponent::class)->name('admin.category');
Route::get('/admin/category/edit/{id}',CategoryComponent::class)->name('admin.category');
Route::get('/admin/category/delete/{id}',CategoryComponent::class)->name('admin.category');
Route::get('/admin/products',ProductsComponent::class)->name('admin.products');
Route::get('/admin/products/add',ProductsComponent::class)->name('admin.products');
Route::get('/admin/products/edit/{id}',ProductsComponent::class)->name('admin.products');
Route::get('/admin/products/delete/{id}',ProductsComponent::class)->name('admin.products');
Route::get('/admin/blog',BlogComponent::class)->name('admin.blog');
Route::get('/admin/blog/add',DashboardComponent::class)->name('admin.blog');
Route::get('/admin/blog/edit/{id}',DashboardComponent::class)->name('admin.blog');
Route::get('/admin/blog/delete/{id}',DashboardComponent::class)->name('admin.blog');
Route::get('/admin/role',RoleComponent::class)->name('admin.role');
Route::get('/admin/role/add',DashboardComponent::class)->name('admin.role');
Route::get('/admin/role/edit/{id}',DashboardComponent::class)->name('admin.role');
Route::get('/admin/role/delete/{id}',DashboardComponent::class)->name('admin.role');
Route::get('/admin/manager',ManagerComponent::class)->name('admin.manager');
Route::get('/admin/manager/add',ManagerComponent::class)->name('admin.manager');
Route::get('/admin/manager/edit/{id}',ManagerComponent::class)->name('admin.manager');
Route::get('/admin/manager/delete/{id}',ManagerComponent::class)->name('admin.manager');
Route::get('/admin/worker',WorkerComponent::class)->name('admin.worker');
Route::get('/admin/worker/add',WorkerComponent::class)->name('admin.worker');
Route::get('/admin/worker/edit/{id}',WorkerComponent::class)->name('admin.worker');
Route::get('/admin/worker/delete/{id}',WorkerComponent::class)->name('admin.worker');
Route::get('/admin/delivery-man',DeliveryManComponent::class)->name('admin.deliveryman');
Route::get('/admin/delivery-man/add',DeliveryManComponent::class)->name('admin.deliveryman');
Route::get('/admin/delivery-man/edit/{id}',DeliveryManComponent::class)->name('admin.deliveryman');
Route::get('/admin/delivery-man/delete/{id}',DeliveryManComponent::class)->name('admin.deliveryman');
