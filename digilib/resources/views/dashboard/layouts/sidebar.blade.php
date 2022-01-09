<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}"  href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'My Post' ? 'active' : '' }}" href="/mypost">
            <span data-feather="file"></span>
            My Post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'Create Post' ? 'active' : '' }}" href="/createpost">
            <span data-feather="shopping-cart"></span>
            Create Post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'Edit Post' ? 'active' : '' }}" href="/editpost">
            <span data-feather="shopping-cart"></span>
            Edit Post
          </a>
        </li>
      </ul>

      
    </div>
  </nav>