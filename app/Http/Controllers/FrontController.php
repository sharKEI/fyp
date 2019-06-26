<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      return view('front.home');
    }

    public function costumes()
    {
      return view('front.costumes');
    }

    public function costume()
    {
      return view('front.costume');
    }
}
