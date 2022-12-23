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

    return view('home');
})->name('home');

Route::get('/prodotti', function () {

    // il dato dentro il return di un config: nome_file.nome_chiave
    $products = config('db.products');

    return view('products', compact('products'));
})->name('products');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/post', function () {
    $posts = config('db.posts');
    //dd($posts);

    return view('posts', compact('posts'));
})->name('posts');

// paramtro dinamico nella rotta:
// aggiungere /{mia_var} e passarla con lo stesso nome alla funzione $mia_var
Route::get('/dettaglio-prodotto/{id}', function ($id) {

    $products = config('db.products');
    $product_get = array_filter($products, fn ($item) => $item['id'] == $id);
    $product = $product_get[array_key_first($product_get)];

    return view('product_detail', compact('product'));
})->name('product_detail');


//post details
Route::get('/dettaglio-post/{id}', function ($id) {
    $post_get = array_filter(config('db.posts'), fn ($item) => $item['id'] == $id);
    //dd($post_get);
    $post_key = array_key_first($post_get);
    $post = $post_get[$post_key];
    //dd($post);
    return view('post_detail', compact('post'));
})->name('post_detail');
