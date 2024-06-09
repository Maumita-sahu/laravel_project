<?php

use App\Http\Controllers\Admin_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControler;


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
Route::get('/login',[FirstControler:: class,'ViewController'])->name('user.login');
Route::post('/login/post',[FirstControler:: class,'LoginPost'])->name('user.login.post');
Route::get('/dashboard',[FirstControler:: class,'dashboard'])->name('dashboard');

Route::get('/register',[FirstControler:: class,'register'])->name('register');
Route::post('/register/post',[FirstControler:: class,'registerPost'])->name('register.action');
Route::get('/gallery',[FirstControler:: class,'gallery'])->name('gallery');

Route::middleware('person')->group(function(){
Route::get('/inner/animal{id}',[FirstControler:: class,'animal_inner'])->name('animal_inner.action');

Route::post('/{id}/addlike',[FirstControler::class,'like'])->name('addlike.action');

Route::get('/logout', [FirstControler::class,'Userlogout'])->name('Userlogout');


});

Route::get('/admin/login',[Admin_controller:: class,'Adminlogin'])->name('Adminlog');
Route::post('/dashboard/adminlogin/post',[Admin_controller:: class,'AdminloginPost'])->name('Adminlog.action');

Route::middleware('admin')->group(function(){
Route::get('/admindashboard',[Admin_controller:: class,'admindashboard'])->name('admindashboard');
Route::get('/Addimage',[Admin_controller:: class,'Addimage'])->name('Addimage');
Route::post('/image/Addimage/post',[Admin_controller:: class,'Addimageaction'])->name('Addimage.action');

Route::get('/Addcatagory',[Admin_controller:: class,'Addcatagory'])->name('add_catagory');
Route::post('/Addcatagory/post',[Admin_controller:: class,'Addcatagoryaction'])->name('Addcatagory.action');

Route::get('/Allcatagory',[Admin_controller:: class,'Allcatagory'])->name('all_catagory');
Route::get('/catagory/delete/{id}',[Admin_controller::class,'destroy_catagory'] )->name('catagory.delete');


Route::get('/image/manage',[Admin_controller:: class,'manage'])->name('manage');

Route::get('/image/edit/{id}',[Admin_controller:: class,'image_view'])->name('iamge.edit.view');
Route::post('/image/edit/post',[Admin_controller:: class,'image_update'])->name('update_image.action');

Route::get('/user/delete/{id}',[Admin_controller::class,'destroy'] )->name('user.delete');

Route::get('/Admin/profile',[Admin_controller:: class,'profile_view'])->name('admin.profie.view');
Route::post('/Admin/profile/edit/post',[Admin_controller:: class,'adminProfile_edit'])->name('update_profile.action');


});