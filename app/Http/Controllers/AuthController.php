<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\VerificationMail;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function signIn(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('login'))
        ->with('success','logged in successully');
        }else{
            return redirect()->intended(route('login'))->with('error','invalid credentials');
        }

    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fname'=>'required',
            'lname'=>'required',
            'username'=>'required',
            'userEmail' => 'required|email|',
            'password' => 'required|min:6|confirmed',


        ], [
            'userEmail.required' => 'The email field is required.',
            'userEmail.email' => 'Please enter a valid email address.',
            'userEmail.unique' => 'This email is already in use.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.confirmed' => 'The passwords do not match.',
        ]);



        if ($validator->fails()) {
            // return response()->json(['error' => $validator->errors()->first()]);
            return with('error','failed to add user');
        }
        $verificationToken = $this->generateUniqueVerificationToken();

        $user = new User();
        $user->firstName=$request->input('fname');
        $user->lastName = $request->input('lname');
        $user->userName = $request->input('username');
        $user->email = $request->input('userEmail');
        $user->password = bcrypt($request->input('password'));
        $user->verification_token = $verificationToken;
        $user->token_expiration_time = now()->addHours(24);
        $user->is_verified = false;
        // $user->role = false;

        $user->save();

        $tokenLink = route('verify', ['token' => $verificationToken]);

        try {
            Mail::to($user->email)
                ->send(new VerificationMail($tokenLink));

            // Redirect to a success page or provide feedback to the user
            return  response()->json(['status' => 'success']);


        } catch (\Exception $e) {
            // Handle email sending failure
            return response()->json(['error' => 'Registration successful, but the verification email could not be sent.']);
        }
    }

    private function generateUniqueVerificationToken()
    {
        $token = Str::random(40);

        while (User::where('verification_token', $token)->exists()) {
            $token = Str::random(40);
        }

        return $token;
    }

 public function signinp()
    {

        return view('signin');


    }
    public function signup()
    {

        return view('signup');


    }

}

