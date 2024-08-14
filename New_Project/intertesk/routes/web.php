<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
route::get('/',[FrontendController::class,'index'])->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/store', [App\Http\Controllers\CategoryController::class,'categorystore'])->name('category.store');
Route::get('/category/delete{id}', [App\Http\Controllers\CategoryController::class,'categorydelete'])->name('category.delete');
Route::post('/category/insert', [App\Http\Controllers\CategoryController::class,'categoryinsert'])->name('category.insert');



Route::get('/sub/category', [App\Http\Controllers\SubcategoryController::class,'sub_category'])->name('sub.category');
Route::get('/sub/category/delete{id}', [App\Http\Controllers\SubcategoryController::class,'sub_category_delete'])->name('sub.category.delete');
Route::post('/sub/category/store', [App\Http\Controllers\SubcategoryController::class,'sub_category_store'])->name('sub.category.store');



Route::get('/product/page', [App\Http\Controllers\ProductController::class,'product_page'])->name('product.page');
Route::post('/sub/product/store', [App\Http\Controllers\ProductController::class,'product_store'])->name('product.store');


Route::get('/role', [RoleController::class, 'role'])->name('role');
Route::post('/permission', [RoleController::class, 'permission'])->name('permission');
Route::post('/role/create', [RoleController::class, 'role_create'])->name('role_create');
Route::post('/assigend_role', [RoleController::class, 'assigend_role'])->name('assigend_role');
Route::get('/remove/user/role/{id}', [RoleController::class, 'remove_user_role'])->name('remove_user_role');
Route::get('/role/edit/{id}', [RoleController::class, 'role_edit'])->name('role_edit');
Route::Post('/role/edit/update', [RoleController::class, 'role_edit_update'])->name('role_edit_update');