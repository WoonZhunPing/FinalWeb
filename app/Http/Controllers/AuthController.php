<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phoneNum' => 'required',
            'homeAdd' => 'required',
            'state'=>'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $check->save();

        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');;
    }
    

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phoneNum' => $data['phoneNum'],
            'homeAdd' => $data['homeAdd'],
            'state' => $data['state'],
            'password' => Hash::make($data['password'])
        ]);;
    //

}

    public function postLogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request-> only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('homePage')->with('save', 'Success')->withErrors('error', 'Failed');
        }
        
        return redirect('login')->withSuccess('You have entered invalid credentials');
    }

    public function homePage(){
        
        $newSubject = subjects::all();
        return view('homePage', compact('newSubject'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

}