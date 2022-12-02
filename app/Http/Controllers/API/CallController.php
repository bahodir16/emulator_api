<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function call(Request $request)
    {
        return response()->json([
                "success"=> 1,
                "message"=> "ok",
                "phone"=> $request->phone ?? "987654321"
        ]);
    }
}
