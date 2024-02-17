<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroSectionRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Hero_section;
use Illuminate\Contracts\View\View;


class HeroSectionController extends Controller
{
    function index() : View {

        $hero_section = Hero_section::first();


        return view('admin.hero-section.index', compact('hero_section'));
    }
    function update(HeroSectionRequest $request) : RedirectResponse
    {

        $data = [
            'main' => $request->main,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');

            $data['image'] = $imagePath;
        }

        Hero_section::updateOrCreate(['id' => 1], $data);



        return redirect()->back()->with('success', 'Hero_section updated successfully');
    }


}



