
@props(['users'])

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <table class="table table-primary">

        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Metier</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['metier']}}</td>
        </tr>
        @endforeach
        </table>
</div>