<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portfolio','ProyectoController@index')->name('portfolio');
Route::view('/contact','contact')->name('contact');
Route::post('contact','ContactoController@store');
