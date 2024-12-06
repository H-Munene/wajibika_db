<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            $isEmailRegistered = DB::table('users')->where('email', $request->email)->get();

            if (!$isEmailRegistered->isEmpty()) {
                return response()->json([
                    'message' => 'Invalid credentials'
                ], 401);
            } else if ($isEmailRegistered->isEmpty()) {
                return response()->json([
                    'message' => 'Email not registered with us'
                ], 401);
            }
        }

        $user = Auth::user();

        $token = $user->createToken('token-name')->plainTextToken; // Consider using a more secure token generation method

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message' => 'Login successful'
        ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
