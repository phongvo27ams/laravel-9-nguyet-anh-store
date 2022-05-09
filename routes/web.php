<?php
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminSubCategoryController;
use Illuminate\Support\Facades\Route;

// GUEST ROUTES
Route::get('/', function () {
	return view('guest.index');
});
Route::get('/collections', function () {
	return view('guest.collections');
})->name('guest.collections');
Route::get('/product', function () {
	return view('guest.product');
});
Route::get('/news', function () {
	return view('guest.news');
});
Route::get('/news/detail', function () {
	return view('guest.news-detail');
});
Route::get('/cart', function () {
	return view('guest.cart');
});
Route::get('/checkouts', function () {
	return view('guest.checkouts');
});

// ADMIN ROUTES
Route::get('/admin/dashboard', [AdminCategoryController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/index', [AdminCategoryController::class, 'category_index'])->name('admin.category.category_index');
Route::post('/admin/category', [AdminCategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('/admin/category/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');

Route::get('/admin/sub-category', [AdminSubCategoryController::class, 'index'])->name('admin.sub-category.index');
Route::get('/admin/sub-category/index', [AdminSubCategoryController::class, 'sub_category_index'])->name('admin.sub-category.sub_category_index');
Route::get('/admin/sub-category/create', [AdminSubCategoryController::class, 'create'])->name('admin.sub-category.create');
Route::post('/admin/sub-category', [AdminSubCategoryController::class, 'store'])->name('admin.sub-category.store');
Route::get('/admin/sub-category/{id}', [AdminSubCategoryController::class, 'edit'])->name('admin.sub-category.edit');
Route::post('/admin/sub-category/{id}', [AdminSubCategoryController::class, 'update'])->name('admin.sub-category.update');
Route::delete('/admin/sub-category/{id}', [AdminSubCategoryController::class, 'delete'])->name('admin.sub-category.delete');

Route::get('/admin/product', [AdminProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/product/index', [AdminProductController::class, 'product_index'])->name('admin.product.product_index');
Route::get('/admin/product/create', [AdminProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product', [AdminProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/product/{id}', [AdminProductController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/product/{id}', [AdminProductController::class, 'delete'])->name('admin.product.delete');

Route::get('/admin/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
?>