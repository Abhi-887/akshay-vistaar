<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutSectionRequest;
use App\Models\About;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AboutSectionController extends Controller
{

    function index() : View {

        $about_section = About::first();


        return view('admin.about-section.index', compact('about_section'));
    }
    function update(AboutSectionRequest $request) : RedirectResponse
    {
        $data = [
            'main' => $request->main,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');

            $data['image'] = $imagePath;
        }

        About::updateOrCreate(['id' => 1], $data);

        return redirect()->back()->with('success', 'about_section updated successfully');
    }
}

