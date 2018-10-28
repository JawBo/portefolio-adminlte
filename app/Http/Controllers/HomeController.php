<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Skill;
use App\About;

use Illuminate\Support\Facades\Storage; 
use App\Http\Requests\StoreComments;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenuComments = Comment::all();
        $contenuSkills = Skill::all();
        $contenuAbout = About::all();
        return view('home',compact('contenuComments','contenuSkills','contenuAbout'));
        
    }
}
