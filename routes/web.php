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
                'title' => 'Request Barang Penjualan',
                'author' => 'Alberto Oktavianus',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non doloremque nostrum ab odio id aliquid, accusamus harum quibusdam quae a officia in perspiciatis laudantium ratione alias at repellat vitae sapiente.',
            ],
            [
                'id' => 2,
                'title' => 'Request Barang Penjualan',
                'author' => 'Devanda Matius',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non doloremque nostrum ab odio id aliquid, accusamus harum quibusdam quae a officia in perspiciatis laudantium ratione alias at repellat vitae sapiente.',
            ],
        ],
    ]);
});

Route::get('/profile/{id}', function ($id) {});
