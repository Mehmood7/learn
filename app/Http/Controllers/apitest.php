<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apitest extends Controller
{
    public function myapi(Request $request){
        printf($request->name." is ".$request->age." years old and is ".$request->title.".");
    }
}
