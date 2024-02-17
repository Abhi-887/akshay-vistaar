<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index() : View {

        $contact = Contact::first();


        return view('admin.contact-us.index', compact('contact'));
    }

    function update(ContactUpdateRequest $request) : RedirectResponse
    {

        Contact::updateOrCreate(

            ['id' => 1],
            [
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'mail_one' => $request->mail_one,
                'mail_two' => $request->mail_two,
                'address' => $request->address,
                'map_link' => $request->map_link,


            ]

        );

        return redirect()->back()->with('success', 'Contact-us Updated successfully');

    }
}
