@extends('layouts.default')
@section('contenu')
<table class="table">
  
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">nom</th>
        <th scope="col">date_naissance</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($auteurs as $a)
            
       
      <tr>
        <th scope="row">{{$a->id}}</tmarqueh>
        <td>{{$a->nom}}</td>
        <td>{{$a->date_naissance}}</td>
        <td>
          <a href="{{route('auteur.show',$a->id)}}"><button class="btn btn-warning">Afficher ses Livres</button></a></td>
    
      </tr>
     
       @endforeach 
      
    </tbody>
  </table>
   {{ $auteurs->links() }}
@endsection