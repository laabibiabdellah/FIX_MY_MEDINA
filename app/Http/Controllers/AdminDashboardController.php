<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $postsCount = Post::count();
        $usersCount = User::count();

        $arrayPosts[] = Post::pluck('created_at', 'id')->map(function ($date, $id) {
            return $date->format('Y-m-d');
        })->countBy()->count();

        foreach ($posts as $post) {
            $dateOfposts[] = $post->formatted_date = $post->created_at->format('Y-m-d');
        }

        if (count($posts) > 0){
            return view('admin.index', compact( 'arrayPosts', 'posts', 'postsCount', 'dateOfposts', 'usersCount'));
        }
        return view('admin.index',[
             'arrayPosts' => 0,
             'posts' => [],
             'postsCount' => 0,
             'usersCount' => 0,
             'dateOfposts' => [],
        ]);
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
