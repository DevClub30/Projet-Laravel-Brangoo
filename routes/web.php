<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoriesController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//-----------------------------------------------------------------------------------
Route::get('/',[HomeController::class,'index'])->name('home');
$idRegex ='[0-9]+';
$slugRegex='[0-9a-z\-]+';

Route::get('/categorie',[CategoriesController::class,'index'])->name('categorie.index');
Route::get('/categorie/{slug}-{categorie}',[CategoriesController::class,'show'])->name('categorie.show')->where([
 'categorie'=>$idRegex,
 'slug'=>$slugRegex
]);


Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('produit',ProduitController::class)->except(['show']);
    Route::resource('categorie',CategorieController::class)->except(['show']);
    });
/**--------------------------------------------------------------------------------------- */
Route::post('/panier/ajoute',[CartController::class,'store'])->name('cart.store'); 
Route::get('/panier/index',[CartController::class,'index'])->name('cart.index');
Route::delete('/panier/{rowid}',[CartController::class,'destroy'])->name('cart.destroy');
Route::get('/panier/delete',[CartController::class,'vide'])->name('delete'); 

