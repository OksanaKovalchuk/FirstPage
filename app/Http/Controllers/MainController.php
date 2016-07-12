<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('pages.ksiu');
    }
    public function stories()
    {
        return view('pages.stories');
    }
    public function painters()
    {
        return view('pages.painters');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
