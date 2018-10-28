<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Skill;
use App\About;

use Illuminate\Support\Facades\Storage; 
use App\Http\Requests\StoreComments;

class WelController extends Controller{
    
    public function index()
    {
        $contenuComments = Comment::all();
        $contenuSkills = Skill::all();
        $contenuAbout = About::all();
        return view('welcome',compact('contenuComments','contenuSkills','contenuAbout'));
    }
   
    public function create(StoreComments $request){
        $path = $request->file('image')->store('public');
        $item = new Comment;
        $item->name=$request->name;
        $item->mail=$request->mail;
        $item->comment=$request->comment;
        $item->image=$path;
        $item->save();
        return redirect ('/#commentsSection');
        // $url = $this->redirector->getUrlGenerator();
        // return $url->previous() . '#commentsSection';
    }

}

