<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.contato.index');
    }

    public function sendContactForm(ContactFormRequest $request)
    {
        //ddd() → dump, die e debug
        //Validate option
        // $validate = $request->validate([
        //     'name' => 'required'
        // ]);
        $contact = Contact::create($request->all());
        Notification::route('mail', config('mail.from.address'))
                        ->notify(new NewContact($contact));
        
        //Boa prática é retornar uma rota                
        return redirect()->route('site.contact')->with([
            'success' => true,
            'message' => 'O contato foi enviado com sucesso'
        ]);
    }
}
