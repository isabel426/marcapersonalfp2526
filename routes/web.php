<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Pantalla principal";
});

Route::get('login', function () {
    return "Login usuario";
});

Route::get('logout', function () {
    return "Logout usuario";
});

Route::get('proyectos', function () {
    return "Listado proyectos";
});

Route::get('proyectos/show/{id?}', function ($id) {
    return "Vista detalle proyecto " . $id;
})->where('id', '[0-9]+');

Route::get('proyectos/create', function () {
    return "Añadir proyecto";
})->where('id', '[0-9]+');

Route::get('proyectos/edit/{id}', function ($id) {
    return "Modificar proyecto " . $id;
})->where('id', '[0-9]+');

Route::get('perfil/{id}', function ($id = null) {
    if ($id == null) {
        return "Visualizar currículo propio";
    } else {
    return "Visualizar el currículo de " . $id;
    }
})->where('id', '[0-9]+');

