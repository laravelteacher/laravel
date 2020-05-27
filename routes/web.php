<?php

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









Route::get('/user/{id}', 'usercontroller@showuser');





















//Route::get('/admin', function () {
    
    //dd('welcome to the admin');
    
//});

//Route::get('/admin/users/{id}', function ($id) {
    
    //dd('welcome to the admin' . ' users ' . $id);
    
//});


