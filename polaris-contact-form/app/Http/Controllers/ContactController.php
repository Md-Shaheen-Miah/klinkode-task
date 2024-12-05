<?php

namespace App\Http\Controllers;

use App\Models\Contact;


use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
   
    public function index()
    {
       
         $contacts = Contact::all();
        
         
         return view('index', compact('contacts'));
    }

   
    public function create()
    {
        return view('contact');
    }

   
    public function store(StoreContactRequest $request)
{
    $request->validate(
        [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ],
        [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Email address is required.',
            'message.required' => 'Message cannot be empty.',
        ]
    );

    
    Contact::create($request->all());

    return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully!');
}


    
    public function show(Contact $contact)
    {
        //
    }

   
    public function edit(Contact $contact)
    {
        //
    }

   
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

   
    public function destroy(Contact $contact)
    {
        //
    }
}
