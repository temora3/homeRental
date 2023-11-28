<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){
        return view('search.home');
     }
     public function search(Request $request){
        
        return view('search.available');
     }
}
 