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
    $pictures = DB::table('table_users')
                  ->get(['picture'])
                  ->map(function ($user){
                      return base64_encode($user->picture);
                  });

    return view('my-templates.public', ['pictures' => $pictures]);
});
