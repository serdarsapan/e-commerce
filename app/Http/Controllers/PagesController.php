<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function man()
    {
    return view('gender.man');
    }
    public function woman()
    {
        return view('gender.woman');
    }
}
