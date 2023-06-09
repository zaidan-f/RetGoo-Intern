<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('login');
        }
    }
 
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required' ],
            'password' => ['required']
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/landing');
        }
 
        return back()->with('loginError', 'Login failed');
    }
 
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('login');
    }
}