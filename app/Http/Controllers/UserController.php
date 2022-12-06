<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function login(){
        if(View::exists('user.login')){
            return view(('user.login'));
        }
        else {
            // return abort(404);
            return response()->view('error.404');
        }
    }

    public function process(Request $request) {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome Back!');
        }
        // else{
        //     return response()->view('errors.404');
        // }
        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }

    public function register(){
        return view('user.register');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout successfull');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        //or $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        auth()->login($user);
        // dd($user); check $user data
        // return $user;
        // return redirect('/login')->with('message', 'Account Registered');
        // return redirect('/login');
    }

    public function show($id){
        return view('student.index');
    }
}
