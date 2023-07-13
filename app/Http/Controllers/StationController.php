<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    //

    public function index(Request $request)
{
    return view('restaurants', [
        'stations' => Station::filter($request->only('restsearch'))->get(),
    ]);
}

public function store(Request $request)
{
    $attributes = request()->validate([
        'name' => 'required|max:255|min:5',
        'image_link' => 'required',
        'description' => 'required',
    ]);

    try {
        Station::create($attributes);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }

    return redirect('/dashboard')->with('success', 'Station added successfully');
}


}
