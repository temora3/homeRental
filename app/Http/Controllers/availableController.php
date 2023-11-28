<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class availableController extends Controller
{
    public function available(){
        return view('search.available');
}


}
