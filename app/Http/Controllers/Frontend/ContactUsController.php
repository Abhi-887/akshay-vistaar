<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class ContactUsController extends Controller

    {
        function index() :View {
            $contact = Contact::first();
            return view('Frontend.contact-us.index', compact('contact'));
        }
    }

