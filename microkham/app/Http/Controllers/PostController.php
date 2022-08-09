<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {

        $posts = Post::latest()->get();

        return view('posts.index', ['posts' => $posts]);

    }

        /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\View
     * 
     */ 
   public function show($id){ 
    // $post = Post::all();
    return view('posts.show', [
        'post'=>Post::findOrFail($id)
    ]);
}
}


