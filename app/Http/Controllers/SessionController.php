<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    // function index() {
    //     return view("login");

    // }
    // function login(Request $request){
    //     $request->validate([
    //         'email'=>'required',
    //         'password'=>'required'
    //     ],[
    //         'email.required'=>'Email Wajib Diisi',
    //         'pssword.required'=>'Password Wajib Diisi',
    //     ]);
    //     $infologin =[
    //         'email'=>$request->email,
    //         'password'=>$request->password,
    //     ];

    //     if(Auth::attempt($infologin)){
    //         //kalo otentikasi sukses
    //         return 'sukses';
    //     }else{
    //         //kalau otentikasi gagal
    //         return 'gagal';

    //     }
    //     }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'email.required' => 'Email Wajib Diisi',
        'password.required' => 'Password Wajib Diisi',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.beranda');
        } else {
            return redirect()->route('user.beranda');
        }
    }

    return redirect()->back()->withErrors(['error' => 'Email atau password salah']);
}

    }

