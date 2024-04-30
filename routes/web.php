<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;

;
Route::get('/', function () {

//    ******Create******
//    DB::insert('INSERT into users (name, email, password) values(?,?,?)', ['Daniel', 'nii@gmail.com', 'crypt']);
//    return view('welcome');

    //*****Read****
//    $users = DB::select('SELECT * FROM users WHERE id = ?', [1]);
//    dd($users);

    //*****Update******
//    $newhashPassword = Hash::make('crypt');
//    $result = DB::update("UPDATE users set password = '$newhashPassword',created_at = CURRENT_TIMESTAMP(), updated_at = CURRENT_TIMESTAMP()  WHERE id = ?", [1]);
//    dd($result);


    //******Delete****
//
//    $results_set = DB::delete("DELETE  from users WHERE id =?", [5]);
//
//    dd($results_set);

    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);





//Route::view('/', 'welcome');
Route::view('/index', 'post.index')->name('index');


Route::resource('/posts', PostController::class);




//Route::get('/', function (\Illuminate\Http\Request $request) {
//
//    $request->session();
//    session(['secret' => '123Password']);
//
//    $value = session('secret');
//    return view('welcome');
//});
//
//Route::prefix('session')->controller(\App\Http\Controllers\SessionController::class)
//    ->group(function () {
//    Route::get('/', 'index');
//});
//
//Route::prefix('sessions')->controller(\App\Http\Controllers\SessionsController::class)->group(function (){
//   Route::get('/', 'index');
//    Route::get('/set', 'set');
//    Route::get('/delete', 'delete');
//
//});
