<?php

namespace App\Http\Controllers;

use App\Models\status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorestateRequest;
use App\Http\Requests\UpdatestateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(StorestateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(status $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(status $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestateRequest $request, status $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(status $state)
    {
        //
    }
}
