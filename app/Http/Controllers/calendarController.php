<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class calendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    public function store(){
        $events = Events->where(Auth::User->id,);
    }
}
