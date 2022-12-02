<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculateController extends Controller
{

     /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calcluate(Request $request)
    {
        return response()->json([
                "success"=> 1,
                "message"=> "ok",
                "price"=> rand(10,50)
        ]);
    }
}
