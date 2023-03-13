<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function profile(){
        return view('profiles.profils');
    }

    // page de modification 
    public function modifications(){
        return view('profiles.modification');
    }
}

?>