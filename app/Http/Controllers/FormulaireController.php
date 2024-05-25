<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    

    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('index',compact('stagiaires'));
    }

 
    public function create()
    {
        return view('create');

    }


    public function store(Request $request)
    {
        Stagiaire::create($request->all());
        return redirect()->route('stagiaires.index');
    }

    
    public function show(Stagiaire $stagiaire)
    {
        return view('show',compact('stagiaire'));
       
    }

    
    public function edit(Stagiaire $stagiaire)
    {
        return view('edit',compact('stagiaire'));
       
    }

 
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $stagiaire->update($request->all());
        return redirect()->route('stagiaires.index');
        
    }

   
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
        return redirect()->route('stagiaires.index');

        
    
    }
}

