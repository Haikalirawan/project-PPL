<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Pemesanan;
use App\Models\Product;
use App\Models\Ulasan;
use App\Models\User;


class C_Mitra extends Controller
{
    public function registrasiMitra()
    {
        return view('mitraRegistrasi');
    }

    public function loginMitra()
    {
        return view('mitraLogin');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/loginMitra')->with('status', 'Registrasi berhasil! Silahkan login');
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboardMitra');
        }

        return back()->with('loginError', 'Login failed!');
    }


    public function dashboardMitra(Request $request)
    {
        return view('dashboardMitra');
    }
}
