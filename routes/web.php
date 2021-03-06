<?php

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
    return view('index');
});

Route::get('/cadastro', 'CredencialController@cadastro');
Route::post('/cadastro', 'CredencialController@cadastro');

Route::get('/login', 'CredencialController@login');
Route::post('/login', 'CredencialController@login');

// Route::get('/logout', 'CredencialController@logout');

Route::get('/cadastraprodutos/{par?}', 'CrudController@cadastraProdutos');
Route::post('/cadastraprodutos/{par?}', 'CrudController@cadastraProdutos');

Route::get('/listaprodutos', 'CrudController@listaProdutosAdm');

Route::view('/carrinho', 'carrinho');

Route::get('/categoria', 'CrudController@listaProdutos');

Route::view('/checkout', 'checkout');
//Route::view('/categoria', 'categoria');
Route::view('/faq', 'faq');
Route::view('/produto', 'produto');
Route::view('/contato', 'contato');

Route::get('/carrinho/{item}', 'CarrinhoController@AdicionaCarrinho');
Route::get('/vercarrinho', 'CarrinhoController@VisualizaCarrinho');

Route::get('/listaprodutos', 'CrudController@listaProdutosAdm');

Route::get('/adm', 'CrudController@listaProdutosAdm');
