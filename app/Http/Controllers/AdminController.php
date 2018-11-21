<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Skill;
use App\Icone;
use App\About;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreComments;
use App\Http\Requests\SkillsRequest;
use App\Http\Requests\AboutRequest;

class AdminController extends Controller
{
    public function comment()
    {
        $contenuComments = Comment::all();
        return view('adminComments',compact('contenuComments'));
    }
    public function skill()
    {
        $contenuSkills = Skill::all();
        $contenuIcones = Icone::all();
        return view('adminSkills',compact('contenuSkills','contenuIcones'));
    }
    public function about()
    {
        $contenuAbout = About::all();
        $contenuIcones = Icone::all();
        return view('adminAbouts',compact('contenuAbout','contenuIcones'));
    }

    public function changeSk(SkillsRequest $request, $id)
    {
        $item = Skill::find($id);
        $item->icone = $request->icone;
        $item->amount = $request->amount;
        $item->skill = $request->skill;
        $item ->save();
        return redirect ('/admin/skills');
    }
    public function changeAb(AboutRequest $request, $id)
    {
        $item = About::find($id);
        $item->icone = $request->icone;
        $item->about = $request->about;
        $item->description = $request->description;
        $item->save();
        return redirect ('/admin/about');   
    }
    public function deleteComment(Request $request, $id)
    {
        $item = Comment::find($id);
        $item->delete();
        return redirect ('/admin/comments');
    }
}
