<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
public function viewForm()
{
    return view('contatti');
}



public function send()
{
    return 'test';
}


}