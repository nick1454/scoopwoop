<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class DefaultController extends Controller
{
    public function about()
    {
        return view('about');
    }
}
