<?php

Route::get ('index',["as"=>"route.index","uses"=>"IndexController@index"]);
Route::get ('spring_inicial',["as"=>"router.spring_inicial","uses"=>"spring_inicialController@spring_inicial"]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
