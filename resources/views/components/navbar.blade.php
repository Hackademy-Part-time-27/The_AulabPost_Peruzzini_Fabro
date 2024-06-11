<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Post an Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        
       @auth
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
      </ul>
    </div>
  </div>
</nav>