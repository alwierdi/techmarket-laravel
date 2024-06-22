<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $curl = curl_init();
        $params = [
            "email" => $request->email,
            "password" => $request->password
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://c9cc-180-244-249-212.ngrok-free.app/user/signin',
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
        return redirect()->intended('/');
    }
}
