@extends('layouts.default')

@section('contenu')
    <!-- Your edit car form content goes here -->
    <div class="container mt-5">
        <h1>Books by Author</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publication Date</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livres as $livre)
                    <tr>
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->date_publication }}</td>
                        <td>{{ $livre->prix }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection