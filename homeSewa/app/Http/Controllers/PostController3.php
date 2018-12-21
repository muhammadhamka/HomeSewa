<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $package = Post::all();
		return view('index3', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $name = '';
       /* if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }*/
        
        $post = new Post();
        //$post->name = $request->get('name');
        $post->type = $request->get('type');
        //$post->id = $request->get('id');
        //$post->contact = $request->get('contact');
        //$post->address = $request->get('address');
        $post->filename = $name;
        $post->save();
        
        return redirect('post3')->with('success', 'Information has been added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view ('edit3', compact('post3','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $name ='';
       /*if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        */
        $post = Post::find($id);
        $post->type = $request->get('type');
       // $post->email = $request->get('email');
        //$post->id = $request->get('id');
        //$post->contact = $request->get('contact');
       // $post->address = $request->get('address');
        $post->filename = $name;
        $post->save();
        
        return redirect('post3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect('post3')->with('success', 'Information has been deleted');
   
    }
}
