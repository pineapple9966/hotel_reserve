<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public $timestamps = false;

    public function index()
    {
        $hotels = Hotel::all();

        return view('admin.hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('admin.hotels.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->all();

        $attributes['photo'] = Storage::putFile('hotels', $request['photo']);

        Hotel::create($attributes);

        return redirect()->route('admin.hotels.index');
    }

    public function show(Hotel $hotel)
    {
        return view('admin.hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('admin.hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $attributes = $request->all();

        if(isset($attributes['photo'])) {
            Storage::delete($hotel->photo);

            $attributes['photo'] = Storage::putFile('hotels', $request['photo']);
        }

        $hotel->update($attributes);

        return redirect()->route('admin.hotels.index');
    }
}
