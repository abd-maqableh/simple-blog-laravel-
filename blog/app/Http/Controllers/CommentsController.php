<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        //.
      //  $user_id=Auth::id();
        $post = Post::where('id', $post_id) -> get();
//        return $post;
     $comments = Comment::where ('post_id', $post_id) -> get ();
       // dd($comments);
       //
//        return $post_id;
//        return $comments;
     return view('blog.comment',compact('comments','post'));
        ///return  "dfdsfds";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $post_id
     * @return void
     */
    public function store(Request $request)
    {
//        return $post_id;
        //
//        dd($request);
        $this->validate($request, array(
            'name'      =>  'required|max:255',
            'comment'   =>  'required|min:5|max:2000'
        ));
        $user_id = Auth::id();

        Comment::create([
            'name' => $request->input('name'),
            'comment' => $request->input('comment'),
//            'user_id' => $user_id,
            'post_id' => $request->input('post_id')
        ]);
        return $this->index($request->input('post_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
