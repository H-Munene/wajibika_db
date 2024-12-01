<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Notifications\RegistrationConfirmationEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(RegisterRequest $request)
    {
        try {
            // Validate the request data
            $request->validated();
            // Create the user
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            //send registration email confirmation
            $user->notify(new RegistrationConfirmationEmail($user));
            event(new Registered($user));
            // Return success response
            return response()->json([
                'message' => 'Registration Successful',
                'user' => $user,], 201);
        } catch (ValidationException $e) { // Log validation errors for debugging
            Log::error($e->validator->errors());
            // Return validation error response
            return response()->json([
                'errors' => $e->validator->errors()->all(),], 422);
        } catch (\Exception $e) {
            // Log the exception message
            Log::error($e->getMessage());
            // Return general error response
            return response()->json([
                'message' => $e->getMessage(),], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function index()
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
