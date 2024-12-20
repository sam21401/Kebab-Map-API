<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register (Request $request)
    {
        try {
                $validateuser = Validator::make(
                    $request->all(),
                    [
                        'name' => 'required',
                        'email' => 'required|email|unique:users,email',
                        'password' => 'required',
                    ]
                );

                if ($validateuser->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'validation error',
                        'errors' => $validateuser->errors()
                    ], 401);
                }

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'User created Succesfully',
                    'token' => $user->createToken('API TOKEN')->plainTextToken
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => $th->getMessage(),
                ], 500);
        }
    }
    public function login(Request $request)
    {
        try {
            $validateuser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ]
            );

            if ($validateuser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateuser->errors()
                ], 401);
            }

            if (!Auth::attempt(($request->only(['email','password'])))) {
                return response()->json(['status' => false,
                    'status' => false,
                    'message' => 'Something went really wrong!',
                ],401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'Succesfully login',
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            // Return Json Response
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function profile()
    {
        $userData = auth()->user();

        return response()->json([
            'status' => true,
            'message' => 'Profile Info',
            'data' => $userData,
            'id' => auth()->user()->id,
        ], 200);
    }
}
