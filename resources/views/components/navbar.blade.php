<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Pubblica un articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        
       @auth

       @if (Auth::user()->is_admin)
           <li><a class="dropdown-item p-2" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
       @endif

       @if (Auth::user()->is_revisor)
           <li><a class="dropdown-item p-2" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
       @endif

       @if (Auth::user()->is_writer)
          <li><a class="dropdown-item p-2" href="{{ route('writer.dashboard') }}">Dashboard Redattore</a></li>
       @endif

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome {{ Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
                <button type="submit" class="btn nav-link">Logout</button>
                </form>
              </li>
            </ul>
          </li>   
       @endauth
       @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Guest
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('register')}}">Sign Up</a></li>
              <li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
            </ul>
          </li>    
       @endguest

       <form action="{{route('article.search')}}" method="GET" class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Cerca</button>
       </form>

      </ul>
    </div>
  </div>
</nav>