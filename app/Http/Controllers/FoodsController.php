<?php

namespace App\Http\Controllers;

use App\Models\foods;
use Illuminate\Http\Request;
use App\Http\Controllers\FoodController;
use Intervention\Image\Facades\Image;



class FoodsController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $food = new foods();
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
            img::make($image)->resize(300, 300)->save($path);
            $food->image = $filename;
        }
    
        $food->save();
    
        return redirect()->route('admin.foods.index')->with('success', 'Makanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(foods $foods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, foods $foods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(foods $foods)
    {
        //
    }
}
