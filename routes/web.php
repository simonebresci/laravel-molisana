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

Route::get('/', function () {
    $pasta = config('pasta');

    return view('homepage', ['pastaArray' => $pasta,
                             'idxMenuHeader' => 1]);
});


// Pagina product
Route::get('/product/{id?}', function ($id=null) {
    $pasta = config('pasta');

    if(empty($id)){
      return redirect('/product/1');
    }

    return view('product',
                [
                  "idProduct" => $id,
                  "pastaArray" => $pasta,
                  'idxMenuHeader' => 2
                ]);
});

// Pagina product
Route::get('/comingsoon', function () {

    return view('comingsoon',
                [
                  'idxMenuHeader' => 3
                ]);
});

// Pagina News da implementare
Route::get('/news', function () {
    return redirect('/comingsoon');
});
