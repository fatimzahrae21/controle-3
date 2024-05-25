
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">social network</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link" href="{{route('homepage')}}">Accueil</a>
          </li>
          {{-- ila kan user connecter --}}
          {{-- @auth --}}
      
       {{-- deconnecter --}}
         
          {{-- @endauth --}}
          {{-- ila kan user machi connecter --}}
          @guest
          <li class="nav-item">
            <a  class="nav-link" href="{{route('login.show')}}">Se connecter</a>
          </li>
          @endguest          
            {{-- <a class="nav-link" href="{{route('profiles.index')}}">tous les profils</a>
          <li class="nav-item">
            <a  class="nav-link" href="">Mon informations</a>
          </li> --}}
          @guest
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('login.show') }}">Se connecter</a>
          </li>
          @endguest
          <li class="nav-item">
            <a  class="nav-link" href="{{route('profiles.create')}}">Ajouter Profile</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('car.index')}}">One to One</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('auteur.index')}}">One to Many</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{ route('formateurs.index') }}">Many to Many</a>
          </li>
         
              </ul>
              {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    class="btn btn-danger"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Déconnexion') }}
                </x-dropdown-link>
  </form> --}}
  @auth
  
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

    <span class="nav-link">{{ auth()->user()->email }}</span>
    <a class="nav-link btn btn-danger"  href="{{ route('login.logout') }}">Déconnexion</a>
  </ul>
  @endauth
      </div>
    </div>
  </nav>



<nav>
    
    
    
</nav>
{{-- affichher une sule fois --}}


