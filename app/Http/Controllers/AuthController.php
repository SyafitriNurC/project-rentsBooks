<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //
    public function Login(){
        return view('auth.login');
        return redirect()->back()->with('successlogin', 'Anda Berhasil Login!');
    }
    public function Register(){
        return view('auth.register');
    }

    public function registerAccount(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function auth(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|exists:users,name',
            'password'=> 'required',
        ],[
            'name.exists' => "This your name doesn't exists"
        ]);

        $user = $request->only('name', 'password');
        if (Auth::attempt($user)){
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect('/users');
            }
            return redirect()->intended('/dashboard-user');
        }
        return redirect('/login');
            
    }

    public function logout()
    {
        auth()->logout();
        Session()->flush();
        return redirect('/');
    }
}
