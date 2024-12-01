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
        $credentials = $request->only("email", "password");

        if (!Auth::validate($credentials)) {
            //if email is found but invalid password doesn't match

            $email_is_in_DB = DB::table('users')->where('email', $request->email)->get();
            if (!$email_is_in_DB->isEmpty()) {
                return response()->json([
                    'message' => 'Incorrect Credentials'], 401);
            } else if ($email_is_in_DB->isEmpty()) {
                //email is not present in DB
                return response()->json([
                    'message' => 'Email is not registered with us'], 401);
            }
        }
        /*
         * Auth::getProvider():
         *  This gets the user provider configured for the authentication guard
         *  being used (typically the default guard, which is users)
         *
         * retrieveByCredentials($credentials):
            This method fetches a user from the user provider based on the given credentials.
            The $credentials array usually includes data like email and password.
         */
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return response()->json([
            'user' => $user,
            'message' => 'Login Successful',
            'token' => $user->createToken('token-name')->plainTextToken,
        ], 201);

        //send login email
        //$user->notify(new LoginConfirmationEmail($user));
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
