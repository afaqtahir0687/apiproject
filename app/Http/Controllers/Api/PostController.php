<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 

        $posts = Post::with('comments')->get();
        // dd($posts);
        return view('post', compact('posts'));

        // return response()->json(['post' => $posts]);
        // return response()->json(['post' => Post::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->address = $request->address;
        $post->job_id = $request->job_id;
        $post->save();
        return response()->json(['message' => 'Post has been created successfully', 'status' => 'success', 'data' => $post]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
