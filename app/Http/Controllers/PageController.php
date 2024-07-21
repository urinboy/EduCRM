<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home 
    public function index()
    {
        return redirect()->route('home');
    }

    // termsOfServices
    public function termsOfServices()
    {
        return view('pages.terms_of_services');
    }

    // termsOfServices
    public function privacyPolicy()
    {
        return view('pages.privacy_policy');
    }
}
