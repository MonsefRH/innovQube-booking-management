<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }
    public function dashboard()
    {
        $properties = Property::all();
        return view('dashboard', compact('properties'));
    }
}
