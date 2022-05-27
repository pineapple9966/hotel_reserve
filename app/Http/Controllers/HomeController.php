<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'recommends' => Hotel::limit(4)->get(),
            'newArrivals' => Hotel::orderBy('id', 'desc')->limit(4)->get(),
        ];

        return view('home', $data);
    }
}
