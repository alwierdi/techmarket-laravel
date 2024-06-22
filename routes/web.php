<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('users/register', [registerController::class, 'register']);

Route::post('users/login', [loginController::class, 'login']);

Route::get('/about', function () {
    return view('about', ['nama' => 'alwi erdi musthafa']);
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'posts' => [
            [
                'id' => 1,
                'title' => 'Request Add Product',
                'author' => 'Alberto Oktavianus',
                'body' => 'AJAZZ AK820 PRO',
                'img' => 'img/ajazz_ak820.jpeg',
            ],
            [
                'id' => 2,
                'title' => 'Request Add Product',
                'author' => 'Devanda Matius',
                'body' => 'VXE R1 PRO MAX',
                'img' => 'img/vxe_r1.jpeg',
            ],
        ],
    ]);
});

Route::get('/profile/{id}', function ($id) {});
