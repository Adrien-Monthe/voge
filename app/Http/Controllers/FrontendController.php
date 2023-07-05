<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function blog()
    {
        return view('frontend.pages.blog.blog');
    }
}
