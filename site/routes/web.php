<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    // Faz a requisição para a API
    $response = Http::get('http://127.0.0.1:8004/teste');

    // Se a API falhar ou não encontrar nada, define um array vazio por segurança
    $usuarios = $response->successful() ? $response->json() : [];

    return view('home', compact('usuarios'));
});
