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

        // Validate the request
        $request->validate($rules);
         // If the profile image is present, add it to the rules
    if ($request->hasFile('profile_image')) {
        $rules['profile_image'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
    }

    

        // Update user profile
        $user = auth()->user();
        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        // Add more fields as needed

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_images'), $imageName);
            $user->profile_image = $imageName;
        }

        // Save changes
        $user->save();

        // Return success response
        session()->flash('success','Update was successful');
        return redirect(route('profile'));
        //return response()->json(['success' => true]);
    }
    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
