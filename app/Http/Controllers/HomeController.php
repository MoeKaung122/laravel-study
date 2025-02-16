<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $date = post::all();
        return view('home',compact('date'));
    }
}
