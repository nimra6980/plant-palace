<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;

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

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
});

Route::get('/', function () {
    return redirect->route('index');
});


// products
Route::get('/plants',[AdminController::class,'plants'])->name('plants');
Route::get('/createplants',[AdminController::class,'createplants'])->name('createplants');
Route::post('/addplants',[AdminController::class,'addplants'])->name('addplants');
Route::get('/deleteplants/{id}',[AdminController::class,'deleteplants'])->name('deleteplants');
Route::get('/editplants/{id}',[AdminController::class,'editplants'])->name('editplants');
Route::get('/order',[AdminController::class,'order'])->name('order');
Route::put('/updateplants/{id}',[AdminController::class,'updateplants'])->name('updateplants');
Route::get('/productdetail/{id}',[WebController::class,'productdetail'])->name('productdetail');
// accessories
Route::get('/accessories',[AdminController::class,'accessories'])->name('accessories');
Route::get('/createaccessories',[AdminController::class,'createaccessories'])->name('createaccessories');
Route::post('/addaccessories',[AdminController::class,'addaccessories'])->name('addaccessories');
Route::get('/deleteaccessories/{id}',[AdminController::class,'deleteaccessories'])->name('deleteaccessories');
Route::get('/editaccessories/{id}',[AdminController::class,'editaccessories'])->name('editaccessories');
Route::get('/order',[AdminController::class,'order'])->name('order');
Route::put('/updateaccessories/{id}',[AdminController::class,'updateaccessories'])->name('updateaccessories');

Route::get('/accessoriesdetail/{id}',[WebController::class,'accessoriesdetail'])->name('accessoriesdetail');

// Web
Route::get('/index',[WebController::class,'index'])->name('index');
Route::get('/user_accessories',[WebController::class,'accessories'])->name('usaccessories');
Route::get('/detail_accessories/{id}',[WebController::class,'detaillaccessories'])->name('detaillaccessories');
Route::get('/product',[WebController::class,'product'])->name('product');
Route::get('/wishlist',[WebController::class,'wishlist'])->name('wishlist');
Route::post('/add-wishlist/{id}',[WebController::class,'add_wishlist'])->name('addwishlist');
Route::get('/indoor',[WebController::class,'indoor'])->name('indoor');
Route::get('/outdoor',[WebController::class,'outdoor'])->name('outdoor');
Route::get('/flowering',[WebController::class,'flowering'])->name('flowering');
Route::get('/nom_flower',[WebController::class,'nom_flower'])->name('non_flower');
Route::get('/succlents',[WebController::class,'succlents'])->name('succlents');
Route::get('/medicinal',[WebController::class,'medicinal'])->name('medicinal');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//testimonial
Route::get('/testimonial',[AdminController::class,'testimonial'])->name('testimonial');
Route::get('/createtestimonial',[AdminController::class,'createtestimonial'])->name('createtestimonial');
Route::post('/addtestimonial',[AdminController::class,'addtestimonial'])->name('addtestimonial');
Route::get('/deletetestimonial/{id}',[AdminController::class,'deletetestimonial'])->name('deletetestimonial');
Route::get('/edittestimonial/{id}',[AdminController::class,'edittestimonial'])->name('edittestimonial');
Route::put('/updatetestimonial/{id}',[AdminController::class,'updatetestimonial'])->name('updatetestimonial');
//testimonial
Route::get('/blog',[AdminController::class,'blog'])->name('blog');
Route::get('/createblog',[AdminController::class,'createblog'])->name('createblog');
Route::post('/addblog',[AdminController::class,'addblog'])->name('addblog');
Route::get('/deleteblog/{id}',[AdminController::class,'deleteblog'])->name('deleteblog');
Route::get('/editblog/{id}',[AdminController::class,'editblog'])->name('editblog');
Route::put('/updateblog/{id}',[AdminController::class,'updateblog'])->name('updateblog');

// cart
Route::post('/add_cart/{id}',[WebController::class,'add_cart'])->name('add_cart');
Route::get('/show_cart',[WebController::class,'show_cart'])->name('show_cart');
Route::get('/remove_cart/{id}',[WebController::class,'remove_cart'])->name('remove_cart');


Route::get('/cod',[WebController::class,'cod'])->name('cod');

// contact
Route::get('/contact',[WebController::class,'contact'])->name('contact');
Route::post('/createcontact',[WebController::class,'createcontact'])->name('createcontact');
Route::post('/createfeedback',[WebController::class,'createfeedback'])->name('createfeedback');
Route::get('/showusers',[AdminController::class,'showusers'])->name('showusers');
Route::get('/feedback',[WebController::class,'feedback'])->name('feedback');
Route::get('/showfeedback',[AdminController::class,'showfeedback'])->name('showfeedback');
Route::get('/removefeedback/{id}',[AdminController::class,'removefeedback'])->name('removefeedback');



// about
Route::get('/about',[WebController::class,'about'])->name('about');