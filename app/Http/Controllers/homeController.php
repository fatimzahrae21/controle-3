<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(Request $request) {
      $compteur = $request->session()->increment('compteur',1);
      return view('home',compact('compteur'));
  }
}
