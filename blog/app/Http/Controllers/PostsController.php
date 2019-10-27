<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $comment
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id=Auth::id();
        $posts = Post::where ('user_id',$user_id) -> get () ;
        //dd($posts);
        return view('blog.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request,array(
            'title' => 'required|max:255',
            'description' => 'required'
        ));

        //dd($request);

           // $post= new Post();
           // dd($post);

     $user_id = Auth::id();
       Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => $user_id
        ]);
           return redirect()->route('blog.index');
        //return $this->index();


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        dd($id);
        return "comment";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public  function comment ($id){
        dd($id);
        return "comment";
    }

}
