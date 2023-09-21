<?php

namespace App\Http\Controllers;

use App\Mail\newsLetter;
use App\Mail\touchMail;
use App\Models\Contact;
use App\Models\Touch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function Contact()
    {
        $contact = Contact::all()[0];
        return view("Frontend.contact", compact("contact"));
    }
    public function touchback()
    {
        $touches = Touch::all();
        return view("Backend.components.GetToch", compact('touches'));
    }
    // ** 
    public function contactBack()
    {
        $contact = Contact::all()[0];
        return view("Backend.components.contact", compact("contact"));
    }
    public function store(Request $request, Contact $contact)
    {
        request()->validate([
            'name' => ['required'],
            'number'  => ['required'],
            'subject'  => ['required'],
        ]);
        $data = [
            "name" => $request->name,
            "number" => $request->number,
            "email" => $request->email,
        ];
        $contact->update($data);
        return redirect()->back()->with("success", "Ton Contact a été modifié");
    }
    //**form 
    public function touch(Request $request)
    {

        request()->validate([
            'message' => ['required'],
            'name' => ['required'],
            'email'  => ['required'],
            'subject'  => ['required'],
        ]);
        $data = [
            'message' =>  $request->message,
            "name" => $request->name,
            'email' => $request->email,
            'subject'  => $request->subject,
        ];
        Touch::create($data);

        $touchMail = [
            'message' =>  $request->message,
            "name" => $request->name,
            'email' => $request->email,
            'subject'  => $request->subject,
        ];
        Mail::to("admin@admin.com")->send(new touchMail($touchMail));
        return redirect()->back()->with("success", " Ton message a éte envoyer");
    }
    public function newsletter(Request $request)
    {
        Mail::to($request->email)->send(new newsLetter());
        return redirect()->back()->with("success", " Ton message a éte envoyer");
    }
}
