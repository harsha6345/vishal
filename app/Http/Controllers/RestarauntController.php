<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaraunt;

class RestarauntController extends Controller
{
    public function store(Request $request)
{
    $attributes = request()->validate([
        'name' => 'required|max:255|min:5',
        'image_link' => 'required',
        'description' => 'required',
        'station_id' => 'required',
        'phone' => 'required',
        'embed_link' => 'required',
    ]);

    try {
        Restaraunt::create($attributes);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }

    return redirect('/dashboard')->with('success', 'Restaurant added successfully');
}

public function index(Request $request)
{
    return view('allrestaurants', [
        'restaraunts' => Restaraunt::filter($request->only('search'))->get(),
    ]);
}

}
