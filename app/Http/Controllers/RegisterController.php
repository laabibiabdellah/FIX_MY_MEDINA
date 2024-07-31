<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
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
        $userData = $request->validate([
            'username' => ['required', 'string', 'unique:users'],
            'f_name' => ['string'],
            'l_name' => ['string'],
            'email' => ['required', 'email', 'unique:users'],
            'gender' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'unique:users'],
            'address' => ['string'],
            'password' => ['required', 'string', 'min:6'],
            'img' => ['string'],
        ]);

        // dd($request->post());

        User::create($userData);

        return to_route('login')->with('success', 'User Created successfully');
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
