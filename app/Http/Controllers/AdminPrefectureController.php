<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class AdminPrefectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prefectures = Prefecture::all();
        return view('admin.prefecture.index', compact('prefectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('admin.prefecture.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'city_id' => 'required',
        ]);
        Prefecture::create($data);
        return to_route('dashboard-prefectures.index')->with('success', 'Prefecture created successfully');
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
        $prefecture = Prefecture::findOrFail($id);
        $prefecture->delete();
        return to_route('dashboard-prefectures.index')->with('success', 'Prefecture deleted successfully');
    }
}
