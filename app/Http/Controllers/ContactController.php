<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function submit(Request $red){
        dd($red->input('subject'));
    }
}
