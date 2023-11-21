<?php

namespace App\Http\Controllers;

use App\Models\signup;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $User=new User();
        // $User->firstname ="victor";
        // $User->lastname = "kiim";
        // $User->username  = "headglittt";
        // $User->email = "vkimanga@gmail.com";
        // $User->password = bcrypt("123456789");
        // $User->save();
        return view ('welcome');
    }
}
