<?php

Route::get('/', function () {
    //return view('welcome');
    return view('home');
})->name('home');
Route::get('nosotros', function () {
    return view('about');
})->name('about');
Route::get('servicios', function () {
    return view('service');
})->name('service');
Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('educacion', function () {
    return view('education');
})->name('education');

Route::get('salud',function(){
    return view('Health');
})->name('Health');

Route::post('messages',function(){
    return request()->all();
})->name('messages');

Route::get('/clientes', function () {

});
Route::post('/cliente',function(Request $request){
   
});

Route::delete('/cliente/{id}',function($id){
   
});
