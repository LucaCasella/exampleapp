<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function (){
    $query = DB::table('table_users')->select('picture')->get();

//    $immagine = $query[0];
//
//    $immagine2 = $immagine['picture'];

//    dd($immagine2);

//    dd($query);

    return view('my-templates.public', ['name' => $query]);

});
