<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function() {

    $ninjas =[
              ["name" => "Yoshi", "age" => 25, "belt" => "black", "id" => 1],
              ["name" => "Kuma", "age" => 20, "belt" => "green", "id" => 2],
              ["name" => "Crystal", "age" => 30, "belt" => "pink", "id" => 3],
              ["name" => "Ryu", "age" => 35, "belt" => "orange", "id" => 4],
    ];

    return view('ninjas.index', ["greeting" => "Hello!", "ninjas" => $ninjas]);
}); 


Route::get('/ninjas/{id}', function($id) {
    
    return view('ninjas.show', ["id" => $id]);
}); 