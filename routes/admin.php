<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminVendorProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductImageGalleryController;
use App\Http\Controllers\Backend\ProductVariantController;
use App\Http\Controllers\Backend\ProductVariantItemController;
use App\Http\Controllers\Backend\SellerProductController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Admin Profile Routes

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// Slider Route
Route::resource('slider', SliderController::class);

// Category Route
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);
/** Sub Category Route */
Route::put('subcategory/change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::resource('sub-category', SubCategoryController::class);
// /** Child Category Route */
Route::put('child-category/change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategories', [ChildCategoryController::class, 'getSubCategories'])->name('get-subcategories');
Route::resource('child-category', ChildCategoryController::class);

// /** Brand Routes */
Route::put('brand/change-status', [BrandController::class, 'changeStatus'])->name('brand.change-status');
Route::resource('brand', BrandController::class);

// /** Vendor Profile routes */
Route::resource('vendor-profile', AdminVendorProfileController::class);

// /** Products routes */
Route::get('products/get-subcategories', [ProductController::class, 'getSubCategories'])->name('products.get-subcategories');
Route::get('products/get-child-categories', [ProductController::class, 'getChildCategories'])->name('products.get-child-categories');
Route::put('products/change-status', [ProductController::class, 'changeStatus'])->name('products.change-status');
Route::resource('products', ProductController::class);

/** Products image gallery route */
Route::resource('product-image-gallery', ProductImageGalleryController::class);

/** Products variant route */
Route::put('product-variant/change-status', [ProductVariantController::class, 'changeStatus'])->name('product-variant.change-status');
Route::resource('product-variant', ProductVariantController::class);

/** Products variant item route */
Route::get('product-variant-item/{productId}/{variantId}', [ProductVariantItemController::class, 'index'])->name('product-variant-item.index');
Route::get('product-variant-item/create/{productId}/{variantId}', [ProductVariantItemController::class, 'create'])->name('product-variant-item.create');
Route::post('product-variant-item', [ProductVariantItemController::class, 'store'])->name('product-variant-item.store');

Route::get('product-variant-item-edit/{variantItemId}', [ProductVariantItemController::class, 'edit'])->name('product-variant-item.edit');

Route::put('product-variant-item-update/{variantItemId}', [ProductVariantItemController::class, 'update'])->name('product-variant-item.update');

Route::delete('product-variant-item/{variantItemId}', [ProductVariantItemController::class, 'destroy'])->name('product-variant-item.destroy');

Route::put('product-variant-item-status', [ProductVariantItemController::class, 'chageStatus'])->name('product-variant-item.chages-status');

// Seller Products Routes

Route::get('seller-product', [SellerProductController::class, 'index'])->name('seller-product.index');
