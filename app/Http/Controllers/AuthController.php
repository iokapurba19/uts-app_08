<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    function admin(){
        return view('admin.admin');
    }

    function login(){
        return view('login');
    }
    
    function register(){
        return view('register');
    }
    
    function video(){
        return view('https://www.youtube.com/watch?v=zo9bYyxKs6c&ab_channel=DasarPemrograman');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('admin'));
        }
        return view('login');
        // return redirect(route('home'))->with("error","Login details are not valid");
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error","Registeration failed, Try Again!");
        }
        return redirect(route('login'))->with("succes","Registeration succesfull");

        function logout(){
            Session::flush();
            Auth::logout();
            return redirect(route('login'));
        }

    }

}
