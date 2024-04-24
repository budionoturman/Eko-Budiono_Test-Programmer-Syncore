<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('auth/login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    public function register()
    {
        return view('auth/register', [
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3'
        ]);
        $validatedData['role'] = "member";
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $this->$request->session()->flash('success', 'Registrasi Berhasil');
        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
