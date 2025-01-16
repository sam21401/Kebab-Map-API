<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

/**
 * @group User management
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    /**
     * Register a new user.
     *
     * This endpoint allows a user to create an account by providing their name, email, and password.
     * A unique email address is required for registration. Upon successful registration, the user
     * will receive an authentication token for further API interactions.
     *
     * @bodyParam name string required The name of the user. Example: John Doe
     * @bodyParam email string required A unique email address for the user. Example: john.doe@example.com
     * @bodyParam password string required The password for the account. Example: password123
     *
     * @response 200 {
     *   "status": true,
     *   "message": "User created successfully",
     *   "token": "some-jwt-token"
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "validation error",
     *   "errors": {
     *     "email": ["The email has already been taken."],
     *     "password": ["The password field is required."]
     *   }
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Internal server error message"
     * }
     */
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

    /**
     * Log in a user.
     *
     * This endpoint allows a user to authenticate by providing their email and password.
     * If the credentials are valid, an authentication token will be returned for further API interactions.
     *
     * @bodyParam email string required The email address of the user. Example: john.doe@example.com
     * @bodyParam password string required The password for the account. Example: password123
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Successfully logged in",
     *   "token": "some-jwt-token"
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Validation error",
     *   "errors": {
     *     "email": ["The email field is required."],
     *     "password": ["The password field is required."]
     *   }
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Something went really wrong!"
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Internal server error message"
     * }
     */
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

    /**
     * Retrieve authenticated user's profile.
     *
     * This endpoint retrieves the profile information of the currently authenticated user.
     * The user must be logged in to access this endpoint.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Profile Info",
     *   "data": {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "john.doe@example.com",
     *     "created_at": "2025-01-01T12:00:00.000000Z",
     *     "updated_at": "2025-01-15T12:00:00.000000Z"
     *   },
     *   "id": 1
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Unauthorized."
     * }
     * @authenticated
     */
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

    /**
     * Retrieve user details by ID.
     *
     * This endpoint retrieves the details of a user specified by their ID.
     * Only admins are authorized to use this endpoint.
     *
     * @urlParam id integer required The ID of the user to retrieve. Example: 5
     *
     * @response 200 {
     *   "status": true,
     *   "message": "User details retrieved successfully",
     *   "data": {
     *     "id": 5,
     *     "name": "Jane Doe",
     *     "email": "jane.doe@example.com",
     *     "role": 2,
     *     "created_at": "2025-01-01T12:00:00.000000Z",
     *     "updated_at": "2025-01-15T12:00:00.000000Z"
     *   }
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Access denied. Admins only."
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "User not found"
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Internal server error message"
     * }
     * @authenticated
     */
    public function getUser($id)
    {
        try {
            $authUser = auth()->user();

            if ($authUser->role !== 1) {
                return response()->json([
                    'status' => false,
                    'message' => 'Access denied. Admins only.',
                ], 403);
            }

            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'User not found',
                ], 404);
            }

            return response()->json([
                'status' => true,
                'message' => 'User details retrieved successfully',
                'data' => $user,
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Log out the authenticated user.
     *
     * This endpoint logs out the currently authenticated user by revoking all their active tokens.
     * The user must be logged in to perform this action.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Successfully Logout",
     *   "data": []
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Unauthorized."
     * }
     * @authenticated
     */

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Successfully Logout',
            'data' => []
        ], 200);
    }

    /**
     * Change the authenticated user's password.
     *
     * This endpoint allows the currently authenticated user to change their password.
     * The user must provide their current password for verification and a new password.
     *
     * @bodyParam current_password string required The user's current password. Example: oldpassword123
     * @bodyParam new_password string required The new password. Must be at least 6 characters long and confirmed. Example: newpassword123
     * @bodyParam new_password_confirmation string required Confirmation of the new password. Example: newpassword123
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Password changed successfully."
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Validation error",
     *   "errors": {
     *     "current_password": ["The current password field is required."],
     *     "new_password": ["The new password must be at least 6 characters."]
     *   }
     * }
     * @response 401 {
     *   "status": false,
     *   "message": "Current password is incorrect."
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Internal server error message"
     * }
     * @authenticated
     */
    public function changePassword(Request $request)
    {
        try {
            $validateuser = Validator::make($request->all(), [
                'current_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ]);

            if ($validateuser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateuser->errors(),
                ], 401);
            }

            $user = auth()->user();

            if (!Hash::check($request->current_password, $user->password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Current password is incorrect.',
                ], 401);
            }

            $user->password = Hash::make($request->new_password);
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'Password changed successfully.',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Access a protected admin area.
     *
     * This endpoint checks if the authenticated user has admin privileges.
     * It is designed for testing and demonstration purposes, ensuring that
     * only users with the admin role can access this endpoint.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Welcome, Admin!"
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Access denied. Admins only."
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Internal server error message"
     * }
     * @authenticated
     */

    public function admin (Request $request)
    {
        try {
            $user = auth()->user();

            if ($user->role !== 1) {
                return response()->json([
                    'status' => false,
                    'message' => 'Access denied. Admins only.',
                ], 403);
            }

            return response()->json([
                'status' => true,
                'message' => 'Welcome, Admin!',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}

