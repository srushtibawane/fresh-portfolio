<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request )
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'

        ]);
 
        Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'message'=> $request->message
        ]);

        return redirect('/#contact')->with('success', 'Message sent successfully!');
    }
}
