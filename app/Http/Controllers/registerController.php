<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class registerController extends Controller
{
    public function register(Request $request)
    {
        $curl = curl_init();
        $params = [
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://2e8b-180-243-252-249.ngrok-free.app/user/signup',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    // public function showRegistrationForm()
    // {
    //     // Kembalikan tampilan formulir registrasi
    //     return view('auth.register');
    // }

    // public function register(Request $request)
    // {
    //     // Validasi input pengguna
    //     $validatedData = $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     // Buat permintaan POST ke backend Spring Boot untuk mendaftarkan pengguna
    //     $response = Http::POST('https://2e8b-180-243-252-249.ngrok-free.app', [
    //         'username' => $validatedData['username'],
    //         'email' => $validatedData['email'],
    //         'password' => $validatedData['password'],
    //     ]);

    //     // Periksa respons dari backend
    //     if ($response->successful()) {
    //         // Registrasi berhasil, redirect ke halaman login
    //         return redirect()->route('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    //     } else {
    //         // Registrasi gagal, kembali ke formulir registrasi dengan pesan error
    //         return back()->withErrors($response->json());
    //     }
    // }
}
