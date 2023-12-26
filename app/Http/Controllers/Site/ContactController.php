<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
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

    public function sendContactForm(Request $request)
    {
        //ddd() → dump, die e debug
        $contact = Contact::create($request->all());
        Notification::route('mail', config('mail.from.address'))
                        ->notify(new NewContact($contact));
    }
}
