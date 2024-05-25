<div class="col-sm-4">
  <div class="card" style="width: 18rem;">
    
    <img src="{{asset('storage/'.$profile->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$profile->name}}</h5>
      <p class="card-text">{{Str::limit($profile->bio,50,'')}}</p>
      <a href="{{ route('profiles.show',$profile->id) }}" class="stretched-link"></a>
      </div>

    <div class="card-foot border-top bg-light px-3 py-3" style="z-index: 9">
      <form action="{{route('profiles.destroy',$profile->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm float-end">Supprimer</button>
      </form>
      <form action="{{route('profiles.edit',$profile->id)}}" method="GET">
        @csrf
     @method('GET')
        <button class="btn btn-primary btn-sm float-end mx-2">Modifier</button>
      </form>
    </div>
  </div>
</div>
