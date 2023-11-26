<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class forgotPass extends Controller
{
    public function replace(Request $request){
        $validator = Validator::make($request->all(), [
            'userEmail'=>'email'
        ],[
             'userEmail.required' => 'The email field is required.',
            'userEmail.email' => 'Please enter a valid email address.',
        ]);


        if ($validator->fails()) {

            return with('error', 'failed to find user');
        }


}
}
