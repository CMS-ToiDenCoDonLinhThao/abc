<?php


Route::get('/', function () {
    return view('tp');
});

Route::get('/test', function () {
	return view('test');
});
