<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function get(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('acces_token')->plainTextToken;
    
            return response()->json(['token' => $token, 'user' => Auth::user()]);
        }
    
        return response()->json(['message' => 'Credenciales incorrectas'], 401);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password  // Cifra la contraseña
        ]);

        return response()->json($user);
    }

    public function logout(){

    }
}
