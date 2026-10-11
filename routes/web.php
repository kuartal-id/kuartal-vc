<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| kuartalventures.com — Kuartal Ventures.
| No login on this site by design; every route below is public.
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('/thesis', 'thesis')->name('thesis');
Route::view('/approach', 'approach')->name('approach');
Route::view('/incubator', 'incubator')->name('incubator');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/about', 'about')->name('about');
