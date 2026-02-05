<?php

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
use App\Http\Controllers\RecipeController;

Route::prefix('recipes')->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
    Route::get('/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
});

Route::get('/', function () {
    return view('welcome');
});
