<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->keyword;

        return Post::with('user')
        ->where(function($query) use ($search){
            $query->orWhere('id', 'LIKE', '%'.$search.'%');
        })
        ->where('user_id', Auth()->user()->id)->latest()->paginate(10);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'body' => 'required|string',

        ]);
        $post = New Post;
        $post ->title =$request->title;
        $post ->body =$request->body;
        $post ->user_id =Auth()->user()->id;
        $post->save();
        echo json_encode($post);
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'body' => 'required|string',

        ]);
        $post = Post::findOrFail($id);

        $post -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
    }
}
