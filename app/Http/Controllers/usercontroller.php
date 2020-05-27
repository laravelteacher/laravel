<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pad;

class usercontroller extends Controller
{
    
    public function showuser($id){


        $user = pad::findorfail($id);
        return view('house', compact('user'));
    }

}
