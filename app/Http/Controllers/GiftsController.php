<?php

namespace App\Http\Controllers;


use App\Models\Gift;
use Illuminate\Http\Request;

class GiftsController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return response()->json($users);
    }
}
