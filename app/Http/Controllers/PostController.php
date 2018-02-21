<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{


/*
|---------------------------------------------------------------------------------------------------
|       Step to Make a PostController
|---------------------------------------------------------------------------------------------------
|  php artisan make:controller --resource PostController
|
|
|
*/


// Untuk Menampilkan Halaman Post
    public function index()
    {


        $posts = Post::all();

        return view('posts.index', compact('posts'));




    }

// Untuk menampilkan form
    public function create()
    {
        return view('posts.create');
    }

// Untuk mengambil data ke database
    public function store(CreatePostRequest $request)
    {
//        return $request->title;

//        Post::create($request->all());


//
//        $input = $request->all();
//        $input['title'] = $request->title;
//
//
//
//        $this->validate($request,[
//            'title' => 'required',
//
//
//        ]);


        $post = new Post();



        $post->title = $request->title;
        $file = $request->file('file');
        $post->path = $file->getClientOriginalName();
        $post->save();

        $name = $file->getClientOriginalName();
        $file->move('images', $name);

//

        return redirect('/posts');

    }

// Untuk menampilkan data
    public function show($id)
    {
        //

        $post = post::findOrFail($id);


        return view('posts.show', compact('post'));

    }

// Untuk mengedit data
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));

    }

// Untuk mengedit data
    public function update(Request $request, $id)
    {
        //

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/posts');


    }

// Untuk menghapus Data
    public function destroy($id)
    {
        //

        Post::whereId($id)->delete();


        return redirect('/posts');
    }


    public function contact(){


        $people = ['widhy', 'satya', 'willy', 'agus', 'nafilla', 'yunita'];


        return view('contact', compact('people'));



    }


    public function show_post($id, $nama)
    {


//        return view('post', [
//            'id'=> $id,
//            'nama' => $nama,
//        ]);

//        return view('post')->with('id', $id);

        return view('/post', compact('id','nama'));



    }









}
