<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Tutorial extends Controller
{


   public function show(Request $request)
   {
       $data = DB::SELECT("select * from users");
       print_r($data);
       //return view('welcome');
   }


}