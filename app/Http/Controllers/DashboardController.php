<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\signup;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $properties = Property::all();
        // $property->save();
        return view ('index',compact('properties'));
    }
}
