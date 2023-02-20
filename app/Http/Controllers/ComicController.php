<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComicModel as Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = comic::all();
        return view('home', compact('comics'));
    }
}
