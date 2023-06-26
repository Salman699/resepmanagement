  {{-- Start Nav --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <!-- Logo  -->
      <strong><a class="navbar-brand fs-4" href="#" style="font-family:cursive; text-shadow: 2px 2px 1px Bisque; color:darkolivegreen; font-size:23pt">📚RecipesBox</a></strong>
      <!-- Toggle Btn -->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Sidebar -->
      <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- Sidebar Header -->
        <div class="offcanvas-header text-whitw border-bottom"> 
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RecipesBox</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Sidebar Body  -->
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#resep">Resep</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            
            <li class="nav-item mx-2">
              <a class="nav-link" href="#maps">Maps</a>
            </li>
          </ul>
          <!-- Login-->
          <div class="d-flex justify-content-center align-items-center gap-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @guest
                Login
                @else
                {{ Auth::user()->name }}
                @endguest
              </a>
              <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                @guest
                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a>
                  @endguest

                  @auth
                <li>
                  <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
                @endauth

                <!-- Add more profile-related links if needed -->
              </ul>

            </div>
          </div>
        </div>
      </div>
  </nav>
  {{-- End Nav --}}