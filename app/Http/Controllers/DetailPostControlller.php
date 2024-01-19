<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailPostControlller extends Controller
{
    public function show(post $post)
    {
        $po = post::with('author')->where('id', $post->id)->firstOrFail();
        $commentaires = Commentaire::where('posts_id', $post->id)->latest()->paginate(5);
        return view ('show', ['po' => $po, 'commentaires' => $commentaires]);
    }

    public function commentaire(post $post, Request $request)
    {
        $validated = $request->validate(['commentaire' => ['required', 'string', 'between:2,255']]);
        Commentaire::create(['contenu' => $validated['commentaire'],             
            'posts_id' => $post->id,
            'user_id' => Auth::user()->id]);
        return back()->with('success', 'Commentaire publié');
    }

    public function deleteCommentaire(Commentaire $commentaire){
        $commentaire->delete();
        return redirect()->back()->with('success', "commentaire supprimer");
    }
}
