<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\Route as RoutingRoute;

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
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/trending', [PageController::class, 'trend'])->name('trending');
Route::get('/laceStyle', [PageController::class, 'laceStyle'])->name('laceStyle');
Route::get('/asoebiStyle', [PageController::class, 'asoebiStyle'])->name('asoebiStyle');
Route::get('/ankaraStyle', [PageController::class, 'ankaraStyle'])->name('ankaraStyle');
Route::get('/childrenStyle', [PageController::class, 'childrenStyle'])->name('childrenStyle');
Route::get('/hairStyle', [PageController::class, 'hairStyle'])->name('hairStyle');
Route::get('/makeover', [PageController::class, 'makeover'])->name('makeover');
Route::get('/contactPage', [PageController::class, 'contactPage'])->name('contactPage');
Route::get('/aboutPage', [PageController::class, 'aboutPage'])->name('aboutPage');
Route::post('fetch_styles', [PageController::class, 'fetch_styles'])->name('fetch_styles');
Route::post('fetch_styles_shop', [pageController::class, 'fetch_styles_shop'])->name('fetch_styles_shop');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard'); 
    Route::get('/categories', [PageController::class, 'categories'])->name('categories');   
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
    Route::get('/advert', [PageController::class, 'advert'])->name('advert');
    Route::get('/shopDash', [PageController::class, 'shopDash'])->name('shopDash');
    
    

    // post route

    Route::post('/addGallery', [PostController::class, 'addGallery'])->name('add.gallery');
    Route::post('/addAdvert', [PostController::class, 'addAdvert'])->name('add.advert');
    Route::post('delete_img', [PostController::class, 'delete_img'])->name('delete_img');
    Route::post('/shop', [PostController::class, 'addShop'])->name('add.shop');

    
    // Route::post('/login', [PageController::class, 'login'])->name('login');
});


// Route::get('/', function () {
//     return Inertia::render('W', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
