<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="" alt="" class="" style="opacity: .8">
    <span class="brand-text font-weight-light">RecipeBox</span>
  </a>

  <div class="user-panel">
    <div class="image">
    </div>

    <nav class="">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @php
        $role = Auth::user()->role ?? null
        @endphp

        @if($role =='admin')

        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="fa-solid fa-list-ul"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/category" class="nav-link">
            <i class="fa-solid fa-list-ul"></i>
            <p>
              Category
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="fa-regular fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/resep" class="nav-link">
            <i class="fa-solid fa-book-open"></i>
            <p>
              Resep
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/video" class="nav-link">
            <i class="fa-solid fa-video"></i>
            <p>
              Video
            </p>
          </a>
        </li>

        <!-- @php
        $id=Auth::user()-> id ?? null
        @endphp

        <li class="nav-item">
          <a href="/setting/{{$id}}" class="nav-link">
            <i class="fa-solid fa-video"></i>
            <p class="text-white">
              Setting
            </p>
          </a>
        </li> -->

        @else

        <li class="nav-item">
          <a href="/home" class="nav-link">
            <i class="fa-solid fa-list-ul"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/resep" class="nav-link">
            <i class="fa-solid fa-book-open"></i>
            <p>
              Resep
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/video" class="nav-link">
            <i class="fa-solid fa-video"></i>
            <p>
              Video
            </p>
          </a>
        </li>
        @endif

        @php
        $id=Auth::user()-> id ?? null
        @endphp

        <li class="nav-item">
          <a href="/setting/{{$id}}" class="nav-link">
            <i class="fa-solid fa-video"></i>
            <p>
              Setting
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/change-password" class="nav-link">
            <i class="fa-solid fa-video"></i>
            <p>
              Change password
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>