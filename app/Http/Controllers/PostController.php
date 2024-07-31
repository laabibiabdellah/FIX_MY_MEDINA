<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Post;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $cities = City::all();
        return view('post', compact('posts', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prefectures = Prefecture::all();
        $cities = City::all();
        $companies = Company::all();
        return view('createPost', compact('prefectures', 'cities', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formDate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ['required', 'image', 'mimes:png,jpg,svg'],
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'prefecture_id' => 'required',
            'city_id' => 'required',
            'company_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formDate['image'] = $request->file('image')->store('posts', 'public');
        }

        $formDate['user_id'] = Auth()->user()->id;
        Post::create($formDate);

        return to_route('post.index')->with('message', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('postDitiles', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
