<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtén el usuario autenticado
        $user = Auth::guard('sanctum')->user();
    
        if (!$user) {
            return response()->json([
                "message" => "Usuario no autenticado",
            ], 401);
        }
    
        // Carga la relación "friendships" del usuario
        $user->load('gifts');
    
        return response()->json($user->gifts);
    }

    public function create(Request $request){
        $gift = Gift::Create([
            'user_id'=>Auth::guard('sanctum')->user()->id,
            'name'=>$request->name,
            'description'=>$request->description,
            'giftLink'=>$request->link,
            'priority'=>$request->priority,
        ]);
        return response()->json($gift);
    }
    
}
