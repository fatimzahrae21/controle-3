@extends('layouts.default')
@section('contenu')
<h1>Formateur Details</h1>
@foreach ($formateurs as $formateur)
    

<div class="container mt-5">

    <table class="table table-striped table-success">
        <thead class="thead-dark"> <!-- Apply thead-dark class for dark background -->
            <tr>
                <th>Formateur</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Groupes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $formateur->nom }}</td>
                <td>{{ $formateur->cin }}</td>
                <td>{{ $formateur->email }}</td>
                <td>
                    <ul>
                        @forelse ($formateur->groupes as $groupe)
                            <li>{{ $groupe->intitule }}</li> <!-- Assuming 'name' is a field in the 'groupes' table -->
                        @empty
                            <li>No groupes assigned to this formateur.</li>
                        @endforelse
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endforeach
@endsection