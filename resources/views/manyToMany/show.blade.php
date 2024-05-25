@extends('layouts.default')
@section('contenu')
<table class="table">
  <a href="{{route('auteur.create')}}"><button class="btn btn-warning">Ajouter Auteur</button></a></td>
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">nom</th>
        <th scope="col">date_naissance</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($auteur as $a)
            
       
      <tr>
        <th scope="row">{{$a->id}}</tmarqueh>
        <td>{{$a->nom}}</td>
        <td>{{$a->date_naissance}}</td>
        <td><a href="{{route('auteur.edit',$a->id)}}"><button class="btn btn-success">modiffier</button></a>
          <form class="d-inline-block" method="post" action="{{route('auteur.destroy',$a)}}">
           @method('DELETE')
           @csrf
           <button class="btn btn-danger">Supprimer</button>
          </form>
          <a href="{{route('auteur.show',$a->id)}}"><button class="btn btn-warning">Afficher Auteur</button></a></td>
    
      </tr>
       @endforeach --}}
    </tbody>
  </table>
@endsection