<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        ddd($request->all());
    }
}
