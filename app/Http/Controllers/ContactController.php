<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageContact;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create(ContactRequest $request){
        $mail = new Contact;
        $mail->name = $request->name;
        $mail->email=$request->email;
        $mail->message=$request->message;
        $mail->save();
        $mailable=new MessageContact($mail);
        Mail::to('jawad.bouali@hotmail.fr')->send($mailable);
        return redirect('/');
    }
}
