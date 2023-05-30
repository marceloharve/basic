<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcasController;
use App\Models\User;
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
    $categorias = DB::table('categorias')->get();
    return view('home',compact('categorias'));
})->name('Home');

Route::get('/about', function () {
    return view('about');
})->name('About');//->middleware('checkidade');

Route::get('/contact',[ContactController::class,'index'])->name('Contact');

//Categoria rotas
Route::get('/categoria',[CategoriaController::class,'todascategorias'])->name('categoria');
Route::post('/categoria/add',[CategoriaController::class,'addcat'])->name('story.category');
Route::get('/categoria/edit/{id}',[CategoriaController::class,'edit']);
Route::get('/categoria/forcedelete/{id}',[CategoriaController::class,'forcedelete']);

Route::get('/softdelete/category/{id}',[CategoriaController::class,'softdelete']);
Route::get('/categoria/restore/{id}',[CategoriaController::class,'restore']);
Route::post('/categoria/update/{id}',[CategoriaController::class,'update']);



//Marcas rotas
Route::get('/marcas',[MarcasController::class,'todasmarcas'])->name('marcas');
Route::post('/marcas/add',[MarcasController::class,'add'])->name('story.brand');
Route::get('/marcas/edit/{id}',[MarcasController::class,'edit']);
Route::post('/marcas/update/{id}',[MarcasController::class,'update']);
Route::get('/marcas/forcedelete/{id}',[MarcasController::class,'forcedelete']);


Route::get('/user/logout',[MarcasController::class,'logout'])->name('user.logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('dashboard',compact('users'));
        //return view('admin.index');
    })->name('dashboard');
});
