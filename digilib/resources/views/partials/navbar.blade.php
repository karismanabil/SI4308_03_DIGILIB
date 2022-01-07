<link rel="stylesheet" href="/cssku/style.css">

<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light sticky-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class=" p-0" href="/home">
          <img src="/img/logo.png" class="w-75" alt="">
          </a>
        </li>
       
      </ul>
      <form class="d-flex align-items-center m-0">
        <ul class="navbar-nav ">
          <li class="nav-item me-2 dropdown">
            <a class="nav-link dropdown-toggle fw-bold {{ $title === 'Beranda' ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              E-Katalog
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/home">Buku-Buku</a></li>
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
            <a class="nav-link fw-bold {{ $title === 'Register' ? 'active' : '' }}" href="/register">Register</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link fw-bold {{ $title === 'Login' ? 'active' : '' }}" href="/login">Login</a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>
