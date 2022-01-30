<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function submit(Request $red){
        $validation = $red->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ]);
    }
}
