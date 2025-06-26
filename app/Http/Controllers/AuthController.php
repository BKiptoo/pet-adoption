<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Register a new user and redirect based on role.
     *
     * @param Request $request
     */
    /**
     * Register a new user and redirect based on role.
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'sometimes|string|in:user,admin,manager', // Optional role field
        ]);

        $data['password'] = bcrypt($data['password']);
        $data['role'] = $data['role'] ?? 'user'; // Default to 'user' if no role provided

        $user = User::create($data);

        // Log in the user after registration
        Auth::login($user);

        // Determine redirect route based on user role
        $redirectRoute = match ($user->role) {
            // 'admin' => '/admin/dashboard',
            'manager' => '/manager/dashboard',
            'user' => '/user/dashboard',
            default => '/dashboard'
        };

        // Check if request expects JSON (API) or is a web request
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'User registered successfully',
                'user' => $user,
                'redirect' => $redirectRoute
            ], 201);
        }

        return redirect()->intended($redirectRoute);
    }

    /**
     * Login a user and redirect based on role.
     *
     * @param Request $request
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Determine redirect route based on user role
            $redirectRoute = match ($user->role) {
                'admin' => '/admin/dashboard',
                'manager' => '/manager/dashboard',
                'user' => '/user/dashboard',
                default => '/dashboard' // Fallback route
            };

            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'redirect' => $redirectRoute
            ], 200);
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();

            // Redirect to admin dashboard
            return response()->json([
                'message' => 'Admin login successful',
                'user' => $user,
                'redirect' => '/admin/dashboard'
            ], 200);
        }

        // If authentication fails, return an error response
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    /**
     * Logout the authenticated user.
     */
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Logout successful'], 200);
    }
}
