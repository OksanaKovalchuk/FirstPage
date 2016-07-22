<?php

namespace App\Http\Controllers;

use App\Entities\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Posts;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    private $postRepo;
    /**
     * @return mixed
     */
    public function  index(){
        $posts =Post::all();
        return view('story.index')->withPosts($posts);
    }

    /**
     * PostController constructor.
     * @param PostRepository $postRepo
     */
    public function __construct(PostRepository $postRepo){
        $this->postRepo = $postRepo;
    }

    /**
     * 
     */
    public function allPosts(){
        $this->postRepo->getAllPosts();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    //, ImageUpload $imageUpload
    public function store(Request $request){
        //validate the data
        $this->validate($request,array(
            'title' => 'required',
            'reference' =>'required',
            'message' => 'required'
        ));

        //store in database
        $post=new Post;
        $post->title = $request->title;
        $post->reference = $request->reference;
        $post->message = $request->message;

        $post->save();
        //Session::flash('success','Post was succesfully saved');
        return redirect()->route('story.show', $post->id);

    }

    /**
     * @return mixed
     */
    public function create(){
        return view('story.create');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id){
        $post = Post::find($id);
        return view('story.show')->withPost($post);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request,$id){
        $this->validate($request,array(
            'title' => 'required',
            'message' => 'required'
        ));
        //validate the data
        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->message = $request->input('message');
        $post->save();
        //save data to database
//        Session::flash('success', 'This post was successfully saved');
        //set flash data with success message
        return redirect()->route('story.show',$post->id);
        //redirect with flash data to story.show

    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id){
        if (Auth::check() && Auth::user()->admin) {
            $post = Post::find($id);
            return view('story.edit')->withPost($post);
        }
        return back();

    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id){
        if (Auth::check() && Auth::user()->admin) {
            $post=Post::find($id);
            $post->delete();
            return redirect()->route('story.index');
        }
        return back();


    }
}
