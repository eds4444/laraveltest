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

  public function ShowOneMessage($id) {

    $contact = new Contact;
    return view('one-message', ['data' => $contact->find($id)]);

  }

  
  public function updateMessage($id) {

    $contact = new Contact;
    return view('update-message', ['data' => $contact->find($id)]);

  }

  public function updateMessageSubmit($id, ContactRequest $red){

    $contact = Contact::find($id);
    $contact->name = $red->input('name');
    $contact->email = $red->input('email');
    $contact->subject = $red->input('subject');
    $contact->message = $red->input('message');

    $contact->save();

    return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
  }

  public function deleteMessage($id){

    Contact::find($id)->delete(); 
    
    return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
  }

}

