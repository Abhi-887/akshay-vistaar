<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Hero_section;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FronendController extends Controller
{
    function index() :View {
        $hero_section = Hero_section::first();
        $contact = Contact::first();
        return view('Frontend.home.index',compact('hero_section') ,compact('contact'));
    }
}
