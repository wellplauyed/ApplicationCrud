<?php

use Illuminate\Http\Request;
use App\Models\Property;

Route::get('/properties', function () {
    return Property::all(); 
});

Route::post('/properties', function (Request $request) {
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'location' => 'required|string|max:255',
    ]);

    return Property::create($validatedData);  
});
