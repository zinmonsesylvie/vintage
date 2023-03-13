<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles =Article::get();
        return view('Articles.all')->with('articles',$articles);
    }
    // public function vente()
    // {
    //     $articles = Article::all();
    //     return view('Articles.vente')->with('articles',$articles);

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('Articles','public');
        $article = new Article();
        $article ->image =$path;
        $article->nom=$request->nom;
        $article->prix=$request->prix;
        $article->description=$request->description;
        $article->etat=true;
        $article->taille=$request->taille;
        $article->categorie_id=$request->categorie_id;
        $article->vendeur_id=$request->vendeur_id;
        $article->save();

        return redirect("/articles/create");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tabledarticle()
    {
        $articles =Article::get();
        return view('articles.tabledarticle')->with('articles',$articles);

    }
}
