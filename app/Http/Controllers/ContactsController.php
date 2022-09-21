<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactsController;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return view('message');
    }
    public function list_contact (){
        $contact = Contact::all();
        // dd($contact);
        return view ('list_contact', compact('contact'));
    }
}
