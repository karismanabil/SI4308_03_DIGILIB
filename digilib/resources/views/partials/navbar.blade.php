<link rel="stylesheet" href="/cssku/style.css">

<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light sticky-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class=" p-0" href="/">
          <img src="/img/logo.png" class="w-75" alt="">
          </a>
        </li>
       
      </ul>
      <form class="d-flex align-items-center m-0">
        <ul class="navbar-nav ">
          <li class="nav-item me-2 dropdown">
            <a class="nav-link dropdown-toggle fw-bold {{ $title === 'Jenis Buku' ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              E-Katalog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/bukubuku">Buku-Buku</a></li>
              <li><a class="dropdown-item " href="/jenis">Jenis Buku</a></li>
            </ul>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'FAQ' ? 'active' : '' }}" href="/faq">FAQ</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'Login' ? 'active' : '' }}" href="/loginuser">Login</a>
          </li>
          {{-- <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'Register' ? 'active' : '' }}" href="/register">Register</a>
          </li> --}}

          {{-- @auth
          <li class="nav-item me-2 dropdown">
            <a class="nav-link dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
                </li>
            </ul>
          </li>
          @else
          <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'Login' ? 'active' : '' }}" href="/login">Login</a>
          </li>
          @endauth

        </ul>
      </form> --}}
    </div>
  </div>
</nav>
