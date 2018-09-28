<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Storage; 
use App\Http\Requests\StoreComments;

class WelController extends Controller
{
    public function index()
    {
        $contenuComments = Comment::all();
        return view('welcome',compact('contenuComments'));
    }
    public function login()
    {
        return view('vendor/adminlte/login');
    }
    public function create(Request $request)
    {
        $path = $request->file('image')->store('public');
        $item = new Comment;
        $item->name=$request->name;
        $item->mail=$request->mail;
        $item->comment=$request->comment;
        $item->image=$path;
        $item->save();
        return redirect ('/');
    }
}
