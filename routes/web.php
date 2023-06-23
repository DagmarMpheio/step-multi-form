<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('wizard', function () {
    return view('default');
})->name('wizard');



# sem livewire
Route::get('wizard-sem-livewire', function () {
    return view('default');
})->name('wizard-sem-livewire');


Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('products/create-step-one', [App\Http\Controllers\ProductController::class, 'createStepOne'])->name('products.create.step.one');
Route::post('products/create-step-one', [App\Http\Controllers\ProductController::class, 'postCreateStepOne'])->name('products.create.step.one.post');
Route::get('products/create-step-two', [App\Http\Controllers\ProductController::class, 'createStepTwo'])->name('products.create.step.two');
Route::post('products/create-step-two', [App\Http\Controllers\ProductController::class, 'postCreateStepTwo'])->name('products.create.step.two.post');  
Route::get('products/create-step-three', [App\Http\Controllers\ProductController::class, 'createStepThree'])->name('products.create.step.three');
Route::post('products/create-step-three', [App\Http\Controllers\ProductController::class, 'postCreateStepThree'])->name('products.create.step.three.post');
