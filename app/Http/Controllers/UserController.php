<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function articleByCategorie($id)
    {
        $articlebycategorie = Article::where('categorie_id','=', $id)->get();
        // $x = $articlebycategorie->utili;
        // $user = Utilisateur::where('$x','=', $id)->get();
        return view('Articles.index',compact('articlebycategorie'));
    }
    public function details($id)
    {
        $details = Article::where('id','=', $id)->get();

        return view('Articles.details',compact('details'));
    }
}
