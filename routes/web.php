<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\MamberController;


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
/**
 * Student Controller Route List
 */
Route::get('students',[StudentController::class, 'index']);
Route::get('students/{student}',[StudentController::class, 'show']);




Route::redirect('/','about');

Route::options('testing',function (){
    return 'return from testing';
});

Route::get('/about',function (){
    return view('about');
});

Route::get('/contact',function (){
    return view('contact');
});
Route::get('/country', function (){
    return view('country');
})->middleware('country');


Route::get('/example',function (){
    return view('example');

});

Route::resource('users',UserController::class);
Route::resource('members',MemberController::class);







