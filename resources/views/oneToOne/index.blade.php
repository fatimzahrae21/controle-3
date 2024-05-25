@extends('layouts.default')
@section('contenu')
<table class="table">
  <a href="{{route('car.create')}}"><button class="btn btn-warning">ajouter owner</button></a></td>
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">matricule</th>
        <th scope="col">marque</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $c)
            
       
      <tr>
        <th scope="row">{{$c->id}}</tmarqueh>
        <td>{{$c->matricule}}</td>
        <td>{{$c->marque}}</td>
        <td><a href="{{route('car.edit',$c->id)}}"><button class="btn btn-success">modiffier</button></a>
          <form class="d-inline-block" method="post" action="{{route('car.destroy',$c)}}">
           @method('DELETE')
           @csrf
           <button class="btn btn-danger">supprimer</button>
          </form>
          <a href="{{route('car.show',$c->id)}}"><button class="btn btn-warning">afficher owner</button></a></td>
    
      </tr>
       @endforeach
    </tbody>
  </table>
  {{ $cars->links() }}
@endsection