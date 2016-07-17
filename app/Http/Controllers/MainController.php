<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;

class MainController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.ksiu');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function stories()
    {
        return view('pages.stories');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function painters()
    {
        return view('pages.painters');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.someform');
    }
    public function store(ContactFormRequest $request)
    {
       return
           ' <h3>Your name is :</h3> '.($request->name).'<h3>Your email :</h3>'.($request->email).'<h3>Message :</h3>'.($request->message);
    }
}
