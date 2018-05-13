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
	// App\Events::create([
	// 		'name'=>'Super tuto ded teachers du net',
	// 		'description'=>'sur youtube formatoin Laravel 5 -
	// 		19',
	// 		'location'=>'Toulouse',
	// 		'price'=>0
	// ]);
	$events = App\Events::all();

    return view('events.index')->withEvents($events);
});
