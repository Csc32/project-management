<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $routes = ["admin", "teacher", "student"];
    public function index()
    {
        //

    }

    public function checkUserRole(Request $request)
    {
        $user = $request->user();

        if (!isset($user)) {
            return back()->withErrors(['server_error' => 'Ha ocurrido un error, vuelva a intentar'])->onlyInput("user_id");
        }

        $role = $user->rol_fk;

        if ($role === 1) {
            return redirect()->route($this->routes[0]);
        }
        if ($role === 2) {
            return redirect()->route($this->routes[1]);
        }

        if ($role === 3) {
            return redirect()->route($this->routes[2]);
        }
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "user_id" => "required",
            "password" => "required"
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return $this->checkUserRole($request);
        };

        $request->session()->invalidate();
        return back()->withErrors(["user_id" => "Credenciales invalidas"])->onlyInput("user_id");
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with("message", "You have been logout");
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
