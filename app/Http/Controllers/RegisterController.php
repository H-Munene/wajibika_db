<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(RegisterRequest $request)
    {
        try {
            $validate_user = $request->validated();
           ;
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            //$user->notify(new RegistrationConfirmationEmail($user));
            return response()->json([
                'user' => $user,
                'message'=> 'Registration Successful',
            ], 201);

        }catch (ValidationException $exception){
            Log::error($exception->errors()->all());

            return response()->json([
                'message' => $exception->validator->errors()->all(), ], 422);
        }
        catch(\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ],400);
        }
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
