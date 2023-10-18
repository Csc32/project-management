<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoggingController extends Controller
{
    //
    public function index(Request $request)
    {
        if (auth()->attempt($request->all())) {
            return redirect("/home");
        };
    }
}
