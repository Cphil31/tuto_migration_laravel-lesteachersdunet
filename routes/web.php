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
use App\Events;

Route::get('/', function () {
	// Events::create([
	// 		'name'=>'Super tuto ded teachers du net',
	// 		'description'=>'sur youtube formatoin Laravel 5 -
	// 		19',
	// 		'location'=>'Toulouse',
	// 		'price'=>0
	// ]);
	$events = Events::all();

    return view('events.index')->withEvents($events);
});
