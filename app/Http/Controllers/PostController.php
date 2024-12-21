<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post::all();

        // Fetching just post that belongs to the Authenticated User.
        $posts = Post::where('user_id', Auth::user()->id)->get();

        return view('post.index', compact('posts'));
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
        //
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
        $post = Post::findOrFail($id);

        #  Normal to check if user is allowed to perform this action / access the resource
        // if (Auth::user()->id != $post->user_id)
        // {
        //     abort(403);
        // }

        # Using GATE

        // // Passing the post object to the Gate facade to check permissions
        // if (!Gate::allows('update-post', $post)) {
        //     abort(403);
        // };

        // // Second method using Gate
        //Gate::authorize('update-post', $post);

        // When using Policy we use the policy method's name as first parameter.
        Gate::authorize('update', $post);

        return view('post.edit', compact('post'));

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
