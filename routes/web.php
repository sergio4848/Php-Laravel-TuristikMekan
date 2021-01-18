<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/anasayfa','/')->name('anasayfa');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::post('/sendreview/{id}/{slug}', [HomeController::class, 'sendreview'])->name('sendreview');
Route::post('/like/{id}/{slug}', [HomeController::class, 'like'])->name('like');
Route::get('/place/{id}/{slug}', [HomeController::class, 'place'])->name('place');
Route::get('/categoryplaces/{id}/{slug}', [HomeController::class, 'categoryplaces'])->name('categoryplaces');
Route::post('/getplace', [HomeController::class, 'getplace'])->name('getplace');
Route::get('/placelist/{search}', [HomeController::class, 'placelist'])->name('placelist');


//Admin Kısmı
Route::middleware('auth')->prefix('admin')->group(function (){

  Route::middleware('admin')->group(function(){



    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


    #Places
    Route::prefix('place')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\PlaceController::class,'index'])->name('admin_places');
        Route::get('create',[\App\Http\Controllers\Admin\PlaceController::class,'create'])->name('admin_place_create');
        Route::post('store',[\App\Http\Controllers\Admin\PlaceController::class,'store'])->name('admin_place_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'edit'])->name('admin_place_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'update'])->name('admin_place_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'destroy'])->name('admin_place_delete');
        Route::get('show',[\App\Http\Controllers\Admin\PlaceController::class,'show'])->name('admin_place_show');

    });

    Route::prefix('messages')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');

    });
    #Place Image Gallery
    Route::prefix('image')->group(function (){

        Route::get('create/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

    });
    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'show'])->name('admin_review_show');

    });

    #Setting kısmı
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    Route::get('like',[\App\Http\Controllers\Admin\LikeController::class,'index'])->name('admin_like');


    Route::prefix('faq')->group(function (){
        Route::get('/',[FaqController::class,'index'])->name('admin_faq');
        Route::get('create',[FaqController::class,'create'])->name('admin_faq_add');
        Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');

    });
  });

});



Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[UserController::class,'destroymyreview'])->name('user_review_delete');



});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
    Route::get('/like',[\App\Http\Controllers\LikeController::class,'index'])->name('user_like');

    Route::prefix('place')->group(function (){
        Route::get('/',[\App\Http\Controllers\PlaceController::class,'index'])->name('user_places');
        Route::get('create',[\App\Http\Controllers\PlaceController::class,'create'])->name('user_place_create');
        Route::post('store',[\App\Http\Controllers\PlaceController::class,'store'])->name('user_place_store');
        Route::get('edit/{id}',[\App\Http\Controllers\PlaceController::class,'edit'])->name('user_place_edit');
        Route::post('update/{id}',[\App\Http\Controllers\PlaceController::class,'update'])->name('user_place_update');
        Route::get('delete/{id}',[\App\Http\Controllers\PlaceController::class,'destroy'])->name('user_place_delete');
        Route::get('show',[\App\Http\Controllers\PlaceController::class,'show'])->name('user_place_show');

    });
    Route::prefix('image')->group(function (){

        Route::get('create/{place_id}',[\App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
        Route::post('store/{place_id}',[\App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
        Route::get('delete/{id}/{place_id}',[\App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show',[\App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');

    });
    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
        Route::post('update/{id}',[\App\Http\Controllers\ReviewController::class,'update'])->name('user_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    });





});

Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home.index');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
