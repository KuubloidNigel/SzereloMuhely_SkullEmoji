<?php

namespace App\Http\Controllers;
use App\Models\Munkafelvevo;
use App\Models\Szerelo;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AuthManager extends Controller
{

public function __construct(){
    
}


    function login() {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view("login");
    }

    function loginPost(Request $request) {
        $request -> validate([
            'azonosito' => 'required',
            'jelszo' => 'required',
        ]);

        $credentials = $request -> only('azonosito','jelszo');

        if(Auth::guard('szerelo')->attempt($credentials)) {            //szerelokent bejelentkezve
            Auth::login($credentials['azonosito']);
            return redirect() -> intended(route('home'));
        }
        else if (Auth::guard('munkafelvevo')->attempt($credentials)) { //munkafelvevokent bejelentkezve
            return redirect() -> intended(route('home'));
        }
        else {
            return redirect(route('registration')) -> with("error", "Sikertelen bejelentkezés");
        }


    }

    function registration() {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view("registration");
    }
    function registrationPost(Request $request) {
        $request -> validate([
            'nev' => 'required',
            'azonosito' => 'required|unique:szerelos,azonosito',
            'jelszo' => 'required',
            
        ]);
        $data['nev'] = $request -> nev;
        $data['azonosito'] = $request -> azonosito;
        $data['jelszo'] = Hash::make($request -> jelszo);
        $data['role'] = $request->role;



        if($request->role == 'munkafelvevo') {
            $user = Munkafelvevo::create($data);
        }
        else if($request->role == 'szerelo') {
            $user = Szerelo::create($data);
        }

        if(!$user) {
            return redirect(route('registration')) -> with("error", "Sikertelen regisztráció");
        }
        else{
            $data2['nev'] = $request -> nev;
            $data2['azonosito'] = $request -> azonosito;
            $data2['jelszo'] = Hash::make($request -> jelszo);
            $data2['munkafelvevoe'] = $request->role == 'munkafelvevo';
            User::create($data2);
            return redirect(route('login')) -> with("success", "Sikeres regisztráció");
        } 
    }
    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route("login"));
    }
}
