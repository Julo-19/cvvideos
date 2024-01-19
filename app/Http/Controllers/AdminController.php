<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Mettez à jour le chemin du modèle User
use OpenAdmin\Admin\Form\Layout\Layout;
use App\Models\Post; // Mettez à jour le chemin du modèle Post

class AdminController extends Controller
{


    public function index()
    {
        
        return view('admin.index');
    }
    public function accueil()
    {
        $totalUsers = User::count(); // Utilisez une minuscule pour la variable ($totalUsers au lieu de $TotalUsers)
        $totalPosts = Post::count(); // Utilisez une minuscule pour la variable ($totalPosts au lieu de $TotalPosts)
        $list = User::all();
        
        return view('admin/accueil',compact('totalUsers', 'totalPosts', 'list'));
    }

    public function listUser()
    {
        $users = User::all();
        return view('admin/listUser', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        
        if ($user) {
            $user->delete();
            return redirect('/admin/list')->with('status', "L'utilisateur a été supprimé");
        } else {
            return redirect('/admin/list')->with('status', "Utilisateur introuvable");
        }
    }
}
