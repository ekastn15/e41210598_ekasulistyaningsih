<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
Route::get('/dashboard', function(){
    return view('dashboard',[
        "judul" => "Dashboard"
    ]);
}); 
Route::get('/mainPage', function(){
    return view('mainPage',[
        "judul" => "Admin"
    ]);
}); 
Route::get('/about', [AboutController::class, 'indexAbout']); 
Route::get('/blog', [PostController::class, 'index']);