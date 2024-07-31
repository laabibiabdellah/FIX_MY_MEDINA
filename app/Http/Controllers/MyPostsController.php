<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Post;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class MyPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myposts = Post::where('user_id', auth()->user()->id)->get();
        return view('myPosts.index', compact('myposts'));
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

        $post = Post::findOrFail($id);
        $cities = City::all();
        $companies = Company::all();
        $prefectures = Prefecture::all();
        return view('myPosts.edit', compact('post', 'cities', 'companies', 'prefectures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'image' => 'image',
            'lat' => 'required',
            'lng' => 'required',
            'city_id' => 'required',
            'company_id' => 'required',
            'prefecture_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post = Post::findOrFail($id);
        $post->update($data);
        return to_route('my-posts.index')->with('message', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return to_route('my-posts.index')->with('message', 'Post deleted successfully!');
    }
}
