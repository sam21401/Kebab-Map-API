<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        try {
            $validateuser = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validateuser->fails()) {
                return redirect()->back()
                    ->withErrors($validateuser->errors())
                    ->withInput();
            }
            if (!Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->back()
                    ->with('error', 'Invalid credentials')
                    ->withInput();
            }

            $user = Auth::user();

            if ($user->role !== 1) {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Access denied. Admins only.');
            }


            return redirect()->route('dashboard')->with('success', 'Successfully logged in');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
