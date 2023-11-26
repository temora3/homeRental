<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;


class forgotPass extends Controller
{

    public function replace(Request $request){
        $emailToCheck = $request->input('email');

        $user = User::where('email', $emailToCheck)->first();

        if ($user) {
            $request->validate([
                'email' => 'required|email',
            ]);

            $user = User::where('email', $request->email)->first();

            // Generate a unique reset code
            $code = Str::random(64);

            PasswordReset::create([
                'user_id' => $user->id,
                'verification_code' => $code,
                'expires_at' => now()->addMinutes(30), // Set an expiration time (adjust as needed)
            ]);


        }else{
            return redirect()->intended(route('register'))->with('error', "Credentials don't exist");
        }
        // $validator = Validator::make($request->all(), [
        //     'userEmail'=>'email'
        // ],[
        //      'userEmail.required' => 'The email field is required.',
        //     'userEmail.email' => 'Please enter a valid email address.',
        // ]);





}
public function forgotpasspage(){
    return view('forgotpass');
}
}
