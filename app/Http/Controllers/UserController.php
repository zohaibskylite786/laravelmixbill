<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login_form()
    {
       return view('login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if($validated){
            if(Auth::attempt($request->only('phone_number','password'))){
                notify('Welcome, Mr.'.auth()->user()->name);
                return redirect(RouteServiceProvider::HOME);
            }else{
                notify('Invalid Username/Password');
                return redirect()->back();
            }

        }
    }

    public function register_form()
    {
       return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        if($validated){
            $data = [
                'name'=>$request->name,
                'phone_number'=>$request->phone_number,
                'password'=>Hash::make($request->password)
            ];

            $user = User::create($data);
            if($user){
                notify('Thanks for register with try login');
                return redirect()->route('login');
            }

            notify('Some Thing went wrong');
            return redirect()->back();
        }
    }



}
