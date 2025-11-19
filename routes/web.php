<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/users', function () {
    return view('users.usersLista', ['users' => [
        ['id' => 1, 'name' => 'Ana'],
        ['id' => 2, 'name' => 'Luis'],
        ['id' => 3, 'name' => 'María'],
    ]]);
});

// ----------------------------------------
Route::get('login', function () {
    return "Login usuario";
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('proyectos')->group(function () {
    Route::get('/', [ProyectosController::class, 'getIndex']);

    Route::get('create', [ProyectosController::class, 'getCreate']);

    Route::get('/show/{id}', [ProyectosController::class, 'getShow']) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', [ProyectosController::class, 'getEdit']) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el currículo propio';
    return 'Visualizar el currículo de ' . $id;
}) -> where('id', '[0-9]+');

