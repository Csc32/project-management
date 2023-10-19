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
        $formFields = $request->validate([
            "user_id" => "required",
            "password" => "required"
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect("/home");
        };

        return back()->withErrors(["user_id" => "cedula invalida"])->onlyInput("email");
    }
}
