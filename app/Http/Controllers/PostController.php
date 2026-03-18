<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = auth()->user()
        ->posts()
        ->latest()
        ->paginate(10);

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:150',
            'slug' => 'required|string|max:150|unique:posts,slug',
            'content' => 'required|string',
            'status' => 'required|in:draft,published'
        ]);
        auth()->user()->posts()->create($data);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('view',$post);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update',$post);
        $data = $request->validate([
            'slug' => 'nullable|string|max:150|unique:post,slug,'.$post->id,
            'title' => 'required|string|max:150'.$post->id,
            'content' => 'required|string'.$post->id,
            'status' => 'required|in:draft,published'.$post->id,
        ]);
        if(empty($data['slug'])) $data['slug'] = Str::slug($data['title']);
        $post->update($data);
        return redirect()->route('post.index')->with('ok','Actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete',$post);
        $post->delete();
        return redirect()->route('post.index')->with('ok','Eliminado.');
    }
}
