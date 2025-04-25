<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/acceuil', function () {
    return view('accueil');
});

Route::get('/recherche', function () {
    return view('recherche-reservation');
});

Route::get('/connexion', function () {
    return view('choix-compte');
});

Route::get('/connexion-client', function () {
    return view('connexion-client');
});

Route::get('/inscription-client', function () {
    return view('inscription-client');
});

Route::get('/connexion-agent', function () {
    return view('connexion-agent');
});

Route::get('/admin', function () {
    return view('admin-tableau');
});

Route::get('/admin-rapport', function () {
    return view('admin-rapport');
});

Route::get('/admin-suivi-agents', function () {
    return view('admin-suivi-agents');
});

Route::get('/admin-gestion-transports', function () {
    return view('admin-gestion-transports');
});

Route::get('/admin-gestion-voyages', function () {
    return view('admin-gestion-voyages');
});

Route::get('/connexion-admin', function () {
    return view('connexion-admin');
});