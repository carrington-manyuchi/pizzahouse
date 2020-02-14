<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    /** return view('pizzas');
    *** return 'pizzas'    ** We will be returning a string here
    *** return ['name' => 'veg pizzas', 'base' => 'classic'];    ***returning an array

    *** Below we get data from DB and pass that data as an array into the view
    *** return view('pizzas', ['type' => 'hawaiian', 'base' => 'cheesy crust']); // means passing varable type into view & access that variable and output it
    
     
    *** declare all values outside view method and just pass in as a variable
    *** $pizza = [
    ***    'type' => 'hawaiian' ,
    ***    'base' => 'cheesy crust',
    ***    'price' => 10      
    ***    ];
    **/

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy ']    
        ];

    return view('pizzas', ['pizzas' => $pizzas]);


});