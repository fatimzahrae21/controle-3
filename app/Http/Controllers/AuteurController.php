<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //
    public function index()
    {
         $auteurs = Auteur::paginate(5); // Fetch all auteurs
        return view('oneToMany.index', compact('auteurs'));
    }

    public function show($id)
 {
//   $auteurs = Auteur::findOrFail($id);
//   $livres = $auteurs->livres;
//    return view('oneToMany.index');
   $auteur = Auteur::findOrFail($id);

   // Fetch the livres related to the auteur
   $livres = $auteur->livres;

   // Pass the $auteur and $livres variables to the view
   return view('oneToMany.show', compact('auteur', 'livres'));
 }
}

