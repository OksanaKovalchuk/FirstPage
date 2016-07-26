<?php

namespace App\Http\Controllers;


use App\Entities\Painter;
use App\Entities\Picture;
use App\Http\Requests\ContactFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PainterReposiory;
use App\Repositories\PictureRepository;
use App\Services\EmailService;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    private $pictureRepo;
    private $painterRepo;

    public function __construct(PainterReposiory $painterRepo,PictureRepository $pictureRepo){
        
        $this->pictureRepo = $pictureRepo;
        $this->painterRepo = $painterRepo;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.ksiu');
    }

    /**
     * @return mixed
     */
    public function stories()
    {
        $painters = $this->painterRepo->getAll();

        $pictures = $this->pictureRepo->getAll()->groupBy('painter_id');
        $pictures=Picture::paginate(7);
     //   $painter = Painter::find(id);
        return view('pictures.stories',[
            'pictures' => $pictures,
          'painters' => $painters
        ]);
    }

    /**
     * @return mixed
     */
    public function getPictures()
    {
        $pictures = $this->pictureRepo->getAll();
        foreach ($pictures as $picture){
           return view('pictures');
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function pictureStore(Request $request){
        $this->validate($request,array(
            'name' => 'required',
            'reference' => 'required',
            'napping_story'
        ));
        $picture=new Picture();
        $picture->name = $request->name;
        $picture->reference=$request->reference;
        $picture->napping_story= $request->napping_story;
        $picture->save();
        return redirect()->route('pictures.show', $picture->id);
    }

//    public function painters()
//    {
//        return view('pages.painters');
//    }
    /**
     * @return mixed
     */
    public function  pictureCreate(){
        return view('pictures.create');
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function pictureUpdate(Request $request,$id){
        $this->validate($request,array(
            'name' => 'required',
            'reference' => 'required',
            'napping_story'
        ));
        //validate the data
        $picture= Picture::find($id);
        $picture->name= $request->input('name');
        $picture->reference= $request->input('reference');
        $picture->napping_story = $request->input('napping_story');
        $picture->save();
        //save data to database
//        Session::flash('success', 'This post was successfully saved');
        //set flash data with success message
        return redirect()->route('pictures.show',$picture->id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function pictureShow($id){
        $picture = Picture::find($id);
       // $painter=Painter::with('picture')->get();
        return view('pictures.show')->withPicture($picture);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function pictureEdit($id){
        if (Auth::check() && Auth::user()->admin) {
            $picture= Picture::find($id);
            return view('pictures.edit')->withPicture($picture);
        }
        return back();
    }
    public function pictureDestroy($id){
        if (Auth::check() && Auth::user()->admin) {
            $picture=Picture::find($id);
            $picture->delete();
            return redirect()->route('stories');
        }
        return back();
    }
    /**
     * @return mixed
     */
    public function painters()
    {
        $pictures = $this->pictureRepo->getAll();
        $painters = $this->painterRepo->getAll();
        $painters=Painter::paginate(3);
//        $painter = Painter::find($id);
        return view('pictures.painters',[
            'pictures' => $pictures,
            'painters' => $painters
        ]);
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

        return redirect()->route('contactform');
        
    }
    public function paintersSingle($painterId,PainterReposiory $painterReposiory)
    {
        return view('pictures.paintersSingle', [
            'painter'   =>  $painterReposiory->find($painterId)
        ]);
    }
    /**
     * @return mixed
     */
    public function train(){
    return view('pages.training');
    }
}
