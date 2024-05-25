
<x-master title="infos page">
    <h3>Create profile</h3>

@if ($errors->any())
<x-alert type="danger">
    <h6>Errors :</h6>
    <ul> 
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</x-alert>
@endif

<form action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
        <label class="form-label">nom complet</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
        @error('name')
        <div class="text-danger">
            {{$message}}
        </div>
            
        @enderror
    
    </div>
    <div class="mb-3">
        <label class="form-label">email</label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}">
        @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">password</label>
        <input type="password" name="password" class="form-control" value="{{old('password')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">bio</label>
        <textarea type="text" name="bio" class="form-control" >{{old('bio')}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">ajouter</button>
</form>
</x-master>

