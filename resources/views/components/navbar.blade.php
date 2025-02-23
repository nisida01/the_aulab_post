<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Tutti gi articoli</a>
        </li>
        
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            benvenuto{{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
                <form action="{{ route( 'logout' ) }}" id="logout-form" method="POST">
                @csrf 
                <button type="submit" class="btn nav-link">Logout</button>   
                <form>
            </li>
           
            </ul>
        <li>
        @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Ospite
          </a>
          <ul class="dropdown-menu">
            
               <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
               <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
            </ul>
        <li>
        @endguest
          </ul>
        </li>
      
      </ul>
     
    </div>
  </div>
</nav>