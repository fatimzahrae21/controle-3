<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    //
    public function index()
    {
        // Retrieve all formateurs with their associated groupes
        $formateurs = Formateur::with('groupes')->get();

        // Return a view or JSON response with the data
        return view('manyToMany.index', compact('formateurs'));
    }
    public function showGroups($id)
    {
        // Retrieve the formateur by ID with its associated groupes
        $formateur = Formateur::with('groupes')->findOrFail($id);

        // Return a view or JSON response with the formateur and its groupes
        return view('manyToMany.index', compact('formateur'));
    }
}
