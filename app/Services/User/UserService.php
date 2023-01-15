<?php

namespace App\Services\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserService implements IUserService
{
   public function login(Request $request) {
   
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->route('tasks.index');
    }

    $request->flash();
    return back()->withErrors(['credentials'=> __('i18n.invalid_login_credentials')]);
   }
}