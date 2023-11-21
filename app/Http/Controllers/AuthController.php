<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Mail\VerificationEmail;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\welcome_email;
use App\Mail\welcomeemail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // public function signup()
    // {

    //     return view('signup');


    // }
    // public function submit()
    // {
    //     //validate
    //     $validated = request()->validate(
    //         [
    //             'fname' => 'required',
    //             'lname' => 'required',
    //             'username' => 'required|unique:users,username',
    //             'userEmail' => 'required|email',
    //             'password' => 'required|confirmed|min:8',
    //         ]
    //     );
    //     $user = User::create(
    //         [
    //             'firstName' => $validated['fname'],
    //             'lastName' => $validated['lname'],
    //             'userName' => $validated['username'],
    //             'email' => $validated['userEmail'],
    //             'password' => Hash::make($validated['password']),
    //         ]
    //     );
    //     // Mail::to($user->email)->send(new welcome_email($user));
    //     return redirect()->route('login')->with('success', 'Account created successfully');

    // }
    // public function signin()
    // {

    //     return view('signin');


    // }
    // public function retrieve(LoginRequest $request)
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //      return redirect()->route('welcome')->with('success','logged in successully');
    // //         }else{
    // }



    // public function Authenticate()
    // {
    //     // Validate the user credentials.
    //     $validated = request()->validate([
    //         'userEmail' => 'required|email',
    //         'password' => 'required',
    //     ]);



    //     // Cache the results of the auth attempt.
    //     $cache = Cache::remember('auth_attempt', 60, function () use ($validated) {
    //         return auth()->attempt([$validated['userEmail'], $validated['password']]);
    //     });

    //     // If the user is authenticated, redirect to the welcome page.
    //     if ($cache) {
    //         return redirect()->route('welcome');
    //     } else {
    //         // If the user is not authenticated, redirect to the login page.
    //         return redirect()->route('login');
    //     }
    // }
    public function signIn(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid email or password']);
        }

        if (!$user->is_verified) {
            return response()->json(['error' => 'Account not verified. Check your email for the account activation link.']);
        }

        if (auth()->attempt(['email' => $email, 'password' => $password])) {

            Session::put('isLoggedIn', true);

            if (auth()->user()->role == 1) {
                session(['user_id' => $user->id]);
                return response()->json(['status' => 'success', 'message' => 'Admin logged in', 'role' => 'admin']);
            } else {
                session(['user_id' => $user->id]);
                return response()->json(['status' => 'success', 'message' => 'User logged in', 'role' => 'user']);
            }
        }

        return response()->json(['error' => 'Invalid password. Please try again.']);
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
            return response()->json(['error' => $validator->errors()->first()]);
        }
        $verificationToken = $this->generateUniqueVerificationToken();

        $user = new User();
        $user->firstName=$request->input('fname');
        $user->lastName = $request->input('lname');
        $user->userName = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->verification_token = $verificationToken;
        $user->token_expiration_time = now()->addHours(24);
        $user->is_verified = false;
        $user->role = false;

        $user->save();

        $tokenLink = route('verify', ['token' => $verificationToken]);

        try {
            Mail::to($user->email)
                ->send(new VerificationEmail($tokenLink));

            // Redirect to a success page or provide feedback to the user
            return response()->json(['status' => 'success']);
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

