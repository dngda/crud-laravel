<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $user = $request->username;
        $pass = $request->password;

        $data = DB::table('user')->where('username', $user)->where('password', $pass)->first();
        if($data) {
            return redirect('barang');
        }else{
            return redirect('/')->with('alert', 'Username atau Password Salah!');
        }
    }
    
}
