<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|unique:users,user_id',
            "names" => 'required',
            "lastnames" => "required",
            "telephone_number" => "required|min:10",
            "email" => "required|unique:users,email|email"
        ]);

        if ($validator->fails()) {
            return "error";
        }

        $role = $this->getDefaultRole($request);

        $validated = $validator->validated();
        //hash password
        $validated['password'] = bcrypt($validated['user_id']);

        $validated['rol_id'] = $role;


        $user =  User::create($validated);
        return "user register";
    }

    private function getDefaultRole(Request $request)
    {

        $rolContext = auth()->user()->role;

        if ($rolContext == "admin") {
            return Roles::ROLE_TEACHER;
        }

        if ($rolContext == "teacher") {
            return Roles::ROLE_STUDENT;
        }
    }
}
