<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'menu' => [

            'home'=> 'Homepage',
            'register' => 'Register',
            'info' => 'Info',
            'faq' => 'Faq'
        ],
        'users' => [
            [
            'name' => 'Mario',
            'lastname' => 'Draghi',
            'skills' => 'Sputafuoco'
            ],
            [
            'name' => 'Matteo',
            'lastname' => 'Renzi',
            'skills' => 'Madrelingua inglese'
            ],
            [
            'name' => 'Giuseppe',
            'lastname' => 'Conte',
            'skills' => 'Rubacuori'
            ]

        ]

    ];
    return view('homepage', $data);

});
