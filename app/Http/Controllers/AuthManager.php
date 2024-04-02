<?php

namespace App\Http\Controllers;
use App\Models\Munkafelvevo;
use App\Models\Szerelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AuthManager extends Controller
{
    function login() {
        return view("login");
    }
    function loginPost(Request $request) {
        $request -> validate([
            'azonosito' => 'required',
            'jelszo' => 'required',
        ]);
        $credentials = $request -> only('azonosito','jelszo');
        if(Auth::guard('szerelo')->attempt($credentials)) {            //szerelokent bejelentkezve
            Log::debug($credentials);
            return redirect() -> intended(route('/home'));
        }
        else if (Auth::guard('munkafelvevo')->attempt($credentials)) { //munkafelvevokent bejelentkezve
            return redirect() -> intended(route('/home'));
        }
        else {
            return redirect(route('login')) -> with("error", "Sikertelen bejelentkezés");
        }
    }
    function registration() {
        return view("registration");
    }
    function registrationPost(Request $request) {
        $request -> validate([
            'nev' => 'required',
            'azonosito' => 'required|unique:szerelo,azonosito',
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
        return redirect(route('login')) -> with("success", "Sikeres regisztráció");
    }
    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route("login"));
    }
}
