<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;



class ContactController extends Controller
{
  public function submit(ContactRequest $red){

    $contact = new Contact();
    $contact->name = $red->input('name');
    $contact->email = $red->input('email');
    $contact->subject = $red->input('subject');
    $contact->message = $red->input('message');

    $contact->save();

    return redirect()->route('home')->with('success', 'Сообщение было добавленно');
  }

  public function allData() {
    
    $contact = new Contact;
    return view('messages', ['data' => $contact->all()]);

  }
}

