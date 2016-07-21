<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
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

     * @return mixed
     */
    public function create()
    {
        return view('pages.contactform');
    }

    /**
     * @param ContactFormRequest $request
     * @param EmailService $emailService
     * @return string
     */
    public function store(ContactFormRequest $request, EmailService $emailService)
    {
        $emailService->sendMail($request->get('name'),$request->get('email'),$request->get('message'));
        return view ('pages.filledform');
        
    }

    /**
     * @return mixed
     */
    public function train(){
    return view('pages.training');
    }
}
