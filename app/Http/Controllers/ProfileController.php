<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
{
    return view('profile.home');
}
public function edit()
    {
        return view('profile.edit');
    }

    public function updateProfile(Request $request)
    {
        // Validation rules, adjust as needed
        $rules = [
            'email' => 'required|email',
            'firstname' => 'required|string',
            'lastname' => 'required|string',

            // Add more validation rules for other fields
        ];
    }
}
