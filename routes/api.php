<?php
use App\Http\Controllers\Api\AdminCategoryController;
use App\Http\Controllers\Api\AdminProductController;
use App\Http\Controllers\Api\AdminSubCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get('/admin/category', [AdminCategoryController::class, 'index']);
Route::post('/admin/category', [AdminCategoryController::class, 'store']);
Route::get('/admin/category/{id}/edit', [AdminCategoryController::class, 'edit']);
Route::post('/admin/category/{id}', [AdminCategoryController::class, 'update']);
Route::delete('/admin/category/{id}', [AdminCategoryController::class, 'destroy']);

Route::get('/admin/sub-category', [AdminSubCategoryController::class, 'index']);
Route::get('/admin/sub-category/create', [AdminSubCategoryController::class, 'create']);
Route::post('/admin/sub-category', [AdminSubCategoryController::class, 'store']);
Route::get('/admin/sub-category/{id}/edit', [AdminSubCategoryController::class, 'edit']);
Route::post('/admin/sub-category/{id}', [AdminSubCategoryController::class, 'update']);
Route::delete('/admin/sub-category/{id}', [AdminSubCategoryController::class, 'destroy']);

Route::get('/admin/product', [AdminProductController::class, 'index']);
Route::delete('/admin/product/{id}', [AdminProductController::class, 'destroy']);
?>