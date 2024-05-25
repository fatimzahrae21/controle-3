@extends('layouts.default')

@section('contenu')
    <!-- Your edit car form content goes here -->
    <form method="POST" action="{{ route('car.update', $car->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="id" class="col-md-4 col-form-label text-md-right">id</label>

            <div class="col-md-6">
                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id', $car->id) }}" required autofocus>

                @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="marque" class="col-md-4 col-form-label text-md-right">marque</label>

            <div class="col-md-6">
                <input id="marque" type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque', $car->marque) }}" required>

                @error('marque')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="matricule" class="col-md-4 col-form-label text-md-right">matricule</label>

            <div class="col-md-6">
                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule', $car->matricule) }}" required>

                @error('matricule')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <!-- Add more fields as needed -->

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update Car
                </button>
            </div>
        </div>
    </form>
@endsection
