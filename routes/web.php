<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashbordController;
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
Route::get('/', [HomeController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

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

/**--------------------------------------------------------------------------------------- */

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('produit',ProduitController::class)->except(['show']);
    Route::resource('categorie',CategorieController::class)->except(['show']);
    Route::resource('user',UserController::class)->except(['show','store','create','update','edit']);
    Route::get('dashbord',[DashbordController::class,'index']);
    });
/**--------------------------------------------------------------------------------------- */

Route::middleware('auth')->group(function(){
Route::post('/panier/ajoute',[CartController::class,'store'])->name('cart.store'); 
Route::get('/panier/index',[CartController::class,'index'])->name('cart.index');
Route::delete('/panier/{rowid}',[CartController::class,'destroy'])->name('cart.destroy');
Route::get('/panier/delete',[CartController::class,'vide'])->name('delete'); 
Route::patch('/panier/{rowid}',[CartController::class,'update'])->name('cart.update'); 
});
/**--------------------------------------------------------------------------------------- */
Route::get('/apropos',[PageController::class,'a_propos'])->name('apropos');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/blog',[PageController::class,'blog'])->name('blog');




Route::get('/commande',[CommandeController::class,'index'])->name('store');

