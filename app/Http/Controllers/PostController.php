<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        /**
            * I do not need all this attributions, this verbose manner, below and "save()" if I use "$fillable in the model.
            *
            * $post->title = $request->title;
            * $post->subtitle = $request->subtitle;
            * $post->content = $request->content;
            * $post->save();
         */

        // I need to var_dump what is within "request" to inform which fields I want to be past to the model
        $post->create($request->except(['_token']));
        // $post->save();

        // return redirect()->route('post.index');
        echo
            '<script>
                alert("Cadastro realizado!");
            </script>'
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = $post->categories()->get();

        echo"<h1>{$post->title}</h1>";
        if($categories)
        {
            foreach($categories as $category)
            {
                echo "<p>{$category->title}</p>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
