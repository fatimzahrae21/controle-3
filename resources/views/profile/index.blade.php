
<x-master title="profile page">

    {{-- <x-alert type="warning"> --}}
        {{-- <strong>bonjour</strong> oui dacc --}}
    {{-- </x-alert> --}}
    {{-- <x-alert type="danger"> --}}
        {{-- <strong>bonjour</strong> oui dacc --}}
    {{-- </x-alert> --}}
    {{-- <x-alert type="success"> --}}
        {{-- <strong>bonjour</strong> oui dacc --}}
    {{-- </x-alert> --}}
    <h3>Profiles</h3>
    
    {{-- afficher tous les profiles --}}
    
      <div class="row my-4">

        @foreach ($profiles as $profile)
            <x-profile-card :profile="$profile"/>   
        @endforeach
    
      </div>
    
    
    
    
    
    {{$profiles->links()}}
    
    </x-master>