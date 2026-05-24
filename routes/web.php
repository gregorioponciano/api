<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {

    return response()->json([
        [
            'id' => 1,
            'nome' => 'GPWebSolution'
        ],
        [
            'id' => 2,
            'nome' => 'Maria'
        ]
    ]);

});
