<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function showLogin()
    {
        return view('user.login');
    } 

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('tasks.index');
        }

        //TODO i18n
        return back()->withErrors(['credentials'=>'invalid credentials'])->onlyInput('email');
    } 

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('tasks.index');
    } 
}
