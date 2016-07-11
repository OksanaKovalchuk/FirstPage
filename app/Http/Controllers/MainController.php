<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('firstSite.ksiu');
    }
    public function stories()
    {
        return view('firstSite.stories');
    }
    public function painters()
    {
        return view('firstSite.painters');
    }
    public function contact()
    {
        return view('firstSite.contact');
    }
}
