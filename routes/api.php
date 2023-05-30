<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriaApiController;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductCardController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;
use App\Http\Controllers\User\ResetController;
use App\Http\Controllers\User\UserController;


Route::post('/login',[AuthController::class,'Login']);
Route::post('/register',[AuthController::class,'Register']);
Route::post('/forgetpassword',[ForgetController::class,'ForgetPassword']);
Route::post('/resetpassword',[ResetController::class,'ResetPassword']);
Route::get('/user',[UserController::class,'User'])->middleware('auth:api');
Route::get('/categorias',[CategoriaApiController::class,'Index']);
Route::post('/categorias/inserir',[CategoriaApiController::class,'Inserir']);
Route::get('/categorias/edit/{id}',[CategoriaApiController::class,'Editar']);
Route::post('/categorias/update/{id}',[CategoriaApiController::class,'Update']);
Route::get('/categorias/delete/{id}',[CategoriaApiController::class,'Delete']);
Route::post('/postcontact',[ContactController::class,'PostContato']);
Route::get('/productlistbyremark/{remark}',[ProductListController::class,'ProductListByRemark']);
Route::get('/productdetails/{id}',[ProductDetailsController::class,'ProductDetails']);
Route::get('/allslider',[SliderController::class,'AllSlider']);
Route::post('/addtocart',[ProductCardController::class,'addToCart']);
Route::post('/cartcounts',[ProductCardController::class,'CartCount']);
