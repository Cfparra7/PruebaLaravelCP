<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\User_has_ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\User_has_ServiceController@index');

Route::resource('services', ServiceController::class);
Route::resource('User_has_Service', User_has_ServiceController::class);

//rutas service
Route::get('services.menu', [ServiceController::class, 'services_menu']);
Route::get('services.cita', [ServiceController::class, 'services_cita'])->name('services.cita');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('services.informacion', [ServiceController::class, 'services_informacion']);

Route::post('User_has_Service/saveFC', [User_has_ServiceController::class, 'saveFC'])->name('User_has_Service.saveFC');
Route::post('User_has_Service/saveAM', [User_has_ServiceController::class, 'saveAM'])->name('User_has_Service.saveAM');



