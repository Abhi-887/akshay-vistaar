<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Value;

class ValueController extends Controller
{
    public function index()
    {
        $values = Value::all();
        return view('values.index', compact('values'));
    }


}


