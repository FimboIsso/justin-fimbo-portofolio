<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password' => 'required|string']);
        if ($request->password === env('ADMIN_PASSWORD', 'admin123')) {
            session()->put('is_admin', true);
            return redirect()->route('admin.posts.index')->with('success', 'Connexion réussie.');
        }
        return back()->withErrors(['password' => 'Mot de passe invalide'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect()->route('admin.login')->with('success', 'Déconnecté.');
    }
}
