<?php

namespace App\Http\Controllers;
use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
   
    public function index()
    {
        $gym = Gym::all();
        return view('menu.gyms', compact('gym'));

    }
    public function showCity() {
        //
    }
}