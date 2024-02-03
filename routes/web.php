<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SingleController;

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

Route::fallback([MainController::class, 'showNotFound']);
Route::get('index', [MainController::class, 'index'])->name('index');
// Route::get('listing', [MainController::class, 'listing'])->name('listing');
Route::get('listing', [MainController::class, 'listing'])->name('listing');
Route::get('testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');

Route::get('single/{id}', [MainController::class, 'single'])->name('single');

Route::post('send-email', [ContactController::class, 'send'])->name('sendEmail');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::group(['prefix' => 'admin','middleware' ,], function () {
    Route::group(
        ['prefix' => 'users',], function () {
        Route::get('index', [UserController::class, 'index'])->name('users');
        Route::get('create', [UserController::class, 'create'])->name('createUser');
        Route::post('store', [UserController::class, 'store'])->name('storeUser');
        Route::get('show/{id}', [UserController::class, 'show'])->name('showUser');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('editUser');
        Route::put('update/{id}', [UserController::class, 'update'])->name('updateUser');
        Route::get('destroy/{id}', [UserController::class, 'destroy'])->name('destroyUser');
    });
    Route::group(
    ['prefix' => 'categories',], function () {
        Route::get('index', [CategoryController::class, 'index'])->name('categories');
        Route::get('create', [CategoryController::class, 'create'])->name('createCategory');
        Route::post('store', [CategoryController::class, 'store'])->name('storeCategory');
        Route::get('show/{id}', [CategoryController::class, 'show'])->name('showCategory');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
        Route::put('update/{id}', [CategoryController::class, 'update'])->name('updateCategory');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroyCategory');
    });
    Route::group(
        ['prefix' => 'cars',], function () {
        Route::get('indexx', [CarController::class, 'indexx'])->name('cars');
        Route::get('create', [CarController::class, 'create'])->name('createCar');
        Route::post('store', [CarController::class, 'store'])->name('storeCar');
        Route::get('show/{id}', [CarController::class, 'show'])->name('showCar');
        Route::get('edit/{id}', [CarController::class, 'edit'])->name('editCar');
        Route::put('update/{id}', [CarController::class, 'update'])->name('updateCar');
        Route::get('destroy/{id}', [CarController::class, 'destroy'])->name('destroyCar');
    });
    Route::group(
    ['prefix' => 'testimonials',], function () {
        Route::get('index', [TestimonialController::class, 'index'])->name('testimonials');
        Route::get('create', [TestimonialController::class, 'create'])->name('createTestimonial');
        Route::post('store', [TestimonialController::class, 'store'])->name('storeTestimonial');
        Route::get('show/{id}', [TestimonialController::class, 'show'])->name('showTestimonial');
        Route::get('edit/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
        Route::put('update/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
        Route::get('destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroyTestimonial');
    });
    Route::group(
        ['prefix' => 'messages'], function () {
        Route::get('index', [MessageController::class, 'index'])->name('messages');
        Route::get('create', [MessageController::class, 'create'])->name('createMessage');
        Route::post('store', [MessageController::class, 'store'])->name('storeMessage');
        Route::get('show/{id}', [MessageController::class, 'show'])->name('showMessage');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('editMessage');
        Route::put('update/{id}', [MessageController::class, 'update'])->name('updateMessage');
        Route::get('destroy/{id}', [MessageController::class, 'destroy'])->name('destroyMessage');
    });
    
});
