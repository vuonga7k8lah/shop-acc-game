<?php

use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/dich-vu-game', [\App\Http\Controllers\HomeController::class, 'indexServices'])->name('dich-vu-game');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'logout'])->name('admin');
Route::get('/a.admin', [App\Http\Controllers\HomeController::class, 'aAdmin'])->name('a.admin');


//admin
Route::get('/list', [App\Http\Controllers\CategoriesController::class, 'listView'])->name('list');
Route::get('/add.categoryType', [App\Http\Controllers\CategoriesController::class, 'addView'])
    ->name('add.categoryType');
Route::post('/add.category.type', [App\Http\Controllers\CategoriesController::class, 'actionAdd'])
    ->name('action.category.type');
Route::get('/edit.categoryType/{id}', [App\Http\Controllers\CategoriesController::class, 'editView'])
    ->name('edit.categoryType');
Route::post('/edit.category.type', [App\Http\Controllers\CategoriesController::class, 'actionEdit'])
    ->name('edit.category.type');
Route::get('/delete.categoryType/{id}', [App\Http\Controllers\CategoriesController::class, 'actionDelete'])
    ->name('delete.categoryType');
//admin
//categoryProduct
Route::resource('categoryProduct', CategoryProduct::class, [
    'names' => [
        'index'   => 'categoryProduct.index',
        'create'  => 'categoryProduct.create',
        'store'   => 'categoryProduct.store',
        'show'    => 'categoryProduct.show',
        'edit'    => 'categoryProduct.edit',
        'update'  => 'categoryProduct.update',
        'destroy' => 'categoryProduct.destroy'
    ]
]);
Route::get('category-product-api', [CategoryProduct::class, 'apiDatatable'])->name('CategoryProductApiDatatable');
//menu
Route::resource('adminMenu', MenuController::class, [
    'names' => [
        'index'   => 'adminMenu.index',
        'create'  => 'adminMenu.create',
        'store'   => 'adminMenu.store',
        'show'    => 'adminMenu.show',
        'edit'    => 'adminMenu.edit',
        'update'  => 'adminMenu.update',
        'destroy' => 'adminMenu.destroy'
    ]
]);
Route::get('menu-api', [MenuController::class, 'apiDatatable'])->name('menuApiDatatable');
//product
Route::resource('adminProduct', ProductController::class, [
    'names' => [
        'index'   => 'adminProduct.index',
        'create'  => 'adminProduct.create',
        'store'   => 'adminProduct.store',
        'show'    => 'adminProduct.show',
        'edit'    => 'adminProduct.edit',
        'update'  => 'adminProduct.update',
        'destroy' => 'adminProduct.destroy'
    ]
]);
Route::get('product-api', [ProductController::class, 'apiDatatable'])->name('productApiDatatable');
