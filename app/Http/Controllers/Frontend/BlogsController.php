<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
   function index():View{
    return view('frontend.blogs.blogs');




   }
}
