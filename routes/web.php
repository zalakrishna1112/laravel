<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
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
    return view('website.index');
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/service', function () {
    return view('website.service');
});
Route::get('/menu', function () {
    return view('website.menu');
});
Route::get('/booking', function () {
    return view('website.booking');
});
Route::get('/team', function () {
    return view('website.team');
});
Route::get('/testimonial', function () {
    return view('website.testimonial');
});
Route::get('/contact',[contactController::class,'contact']);
Route::post('/insertContact',[contactController::class,'store']);

Route::get('/signup',[customerController::class,'signup'])->middleware('userbeforelogin');
Route::post('/insertsignup',[customerController::class,'store'])->middleware('userbeforelogin');
Route::get('/login',[customerController::class,'login'])->middleware('userbeforelogin');
Route::post('/loginauth',[customerController::class,'loginauth'])->middleware('userbeforelogin');



Route::get('/logout',[customerController::class,'logout'])->middleware('userafterlogin');
Route::get('/profile',[customerController::class,'profile'])->middleware('userafterlogin');
Route::get('/profile/{id}',[customerController::class,'edit'])->middleware('userafterlogin');
Route::post('/updateprofile/{id}',[customerController::class,'update'])->middleware('userafterlogin');


//=====================================================


Route::group(['middleware'=>['adminafterlogin']],function(){
Route::get('/admin_login',[adminController::class,'index']);
Route::post('/adminloginauth',[adminController::class,'loginauth']);
});

Route::group(['middleware'=>['adminbeforelogin']],function(){

Route::get('/adminlogout',[adminController::class,'logout']);
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/add_category', function () {
    return view('admin.add_category');
});
Route::get('/manage_category', function () {
    return view('admin.manage_category');
});
Route::get('/add_employee', function () {
    return view('admin.add_employee');
});
Route::get('/manage_employee', function () {
    return view('admin.manage_employee');
});
Route::get('/manage_user',[customerController::class,'show']);
Route::get('/manage_user/{id}',[customerController::class,'destroy']);
Route::get('/manage_contact',[contactController::class,'show']);
Route::get('/manage_contact/{id}',[contactController::class,'destroy']);
});
//==============================================================