<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use Auth;


class PostController extends Controller
{
    

    /**
     * @return [type]
     */
    public function index()
    {
        $posts = Post::all(); 
        return view('posts', compact('posts'));
    }

    /**
     * @param mixed $slug
     * 
     * @return [type]
     */
    public function postDetails($slug)
    { 
        $post = Post::findBySlugOrFail($slug); 
        return view('postDetails', compact('post'));
        
    }

    /**
     * @param mixed $slug
     * 
     * @return [type]
     */
    public function edit($slug)
    {
        $post = Post::findBySlugOrFail($slug); 
        return view('postEdit', compact('post'));
    }

    /**
     * @return [type]
     */
    public function create()
    {
        return view('createPost');
    }
    
    /**
     * @param Request $request
     * 
     * @return [type]
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts')->with('status', 'Post created successfully!');
    }

    /**
     * @param PostRequest $request
     * 
     * @return [type]
     */
    public function update(PostRequest $request)
    { 
        Post::where('id', $request->id)->update([
            'title'         => $request->title,
            'description'   => $request->description
        ]);
   
        return redirect()->route('posts')->with('status', 'Post updated successfully!');
    }

    /**
     * @param mixed $slug
     * 
     * @return [type]
     */
    public function delete($slug)
    {
        $post = Post::findBySlugOrFail($slug); 
        $post->delete();
        return redirect()->route('posts')->with('status', 'Post deleted successfully!');
    }
}
