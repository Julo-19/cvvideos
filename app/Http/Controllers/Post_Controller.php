<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Post_Controller extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latest()->get();
        return view('posts', ['posts' => $posts]);
    }

//     public function index(Post $post)
// {
//     // Utilisez la relation 'commentaires' pour récupérer les commentaires associés au post
//     $commentaires = $post->commentaires()->latest()->paginate(5);

//     $posts = Post::with('author')->get();
//     dd($commentaires);
//     return view('posts', ['posts' => $posts, 'commentaires' => $commentaires]);
// }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'video' => 'nullable|mimes:mp4,ogv,webm,mp3|max:20000',
        ]);

        $post = new Post();
        $post->content = $request->input('content');
        if (auth()->check()) {
            $post->user_id = auth()->user()->id;
        };

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoPath = $video->store('videos', 'public');
            $post->video = $videoPath;
        }
        $post->save();
        return redirect('posts')->with('success', 'Post créé avec succès!');
    }

}
