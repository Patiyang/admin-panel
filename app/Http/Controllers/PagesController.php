<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function settings()
    {
        return view('pages.settings');
    }
    public function users()
    {
        return view('pages.users');
    }
}
