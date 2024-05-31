<?php
use App\Http\Controllers\Servicios2Controller;
use Illuminate\Support\Facades\Route;


Route::view('/','home' )->name('home');
Route::view('nosotros','nosotros' )->name('nosotros');
Route::get('servicios','Servicios2Controller@index')->name('servicios');
Route::view('contacto','contacto' )->name('contacto');


//generar 7 rutas
Route::resource('servicios',Servicios2Controller::class)-> except('index','show') ;
/*
Route::get('/programs',[ProgramController::class,'index'])->name('programs.index');
Route::get('servicios','servicios2Controller@index')->name('servicios');
Route::get('servicios','App/Http/Controllers/ServiciosController@servicios')->name('servicios');
Route::get('/','home' )->name('home');
Route::get('nosotros','nosotros' )->name('nosotros');
Route::get('servicios','servicios' )->name('servicios');
Route::get('contacto','contacto' )->name('contacto');

*/