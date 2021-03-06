<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAuthController extends Controller
{
    public function login(Request $request)
    {
        $validation = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail deve conter um e-mail válido',
            'password.required' => 'O campo senha é obrigatório'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember))
            return redirect()->route('dashboard.home');

        return redirect()->back()->withErrors(['login-error' => 'Email ou senha estão incorretos.']);

    }
}
