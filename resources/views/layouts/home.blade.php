<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<body>

  {{-- Start Nav --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <!-- Logo  -->
      <a class="navbar-brand fs-4" href="#">RecipesBox</a>
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
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#resep">Resep</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#maps">Maps</a>
            </li>
          </ul>
          <!-- Login-->
          <div class="d-flex justify-content-center align-items-center gap-3">
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

  {{-- Start Hero --}}
  <section class="about padding-tb" style="background-image: url(resep_images/bg.png); background-repeat:no-repeat; background-size:cover; padding: 100px;">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6 col-12" style="padding: 100px">
          <div class="about-thumb">
            <img src="resep_images/koki.png" alt="" class="img img-fluid" style="width: 350px;">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-content">
            <div class="section-header">
              <span>Welcome RecipesBox</span>
              <h1>Selamat Datang Di Resep Makanan Kami</h1>
            </div>
            <div class="section-wrapper">
              <p>Website ini menyediakan berbagai macam resep makanan, dari mulai makanan yang berjenis berat hingga yang ringan.</p>
              <p>Jika anda menyukai website ini silahkan berikan ulasan terbaik anda disini. Dan kami sangat menanti ulasan anda serta saran dan kritik dari anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- End Hero --}}

  {{-- Start Makanan --}}
  <section class="product style-2 padding-tb" style="background-color:antiquewhite" id="resep">
  <div class="col-12 py-4 text-center">
        <div class="container">
      <div class="section-header">
        <img src="resep_images/book.png" style="width: 46px;" alt="sc-img" class="header-img">
        <span style="font-size: 27pt; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Resep</span>
      </div>
    </div>
  </div>
  </section>
  @yield('content')
  {{-- End Makanan --}}

  {{-- Start About --}}
  <section class="product style-2 padding-tb" style="background-image: url(resep_images/about9.jpg); background-repeat:no-repeat; background-size:cover; padding: 100px;" id="about">
  <div class="row mb-3" id="about">
    <h1 class="text-center mb-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:35pt;">About Us</h1>
    <div class="col-md-6">
      <img src="resep_images/01.png" alt="" class="img img-fluid">
    </div>
    <div class="col-md-6" style="padding: 100px">
      <p style="text-align: justify; font-family:cursive">Website ini berisi tentang berbagai resep makanan yang mudah dan praktis. Kami sengaja membuat website ini agar publik atau khalayak dapat membuat masakan yang lezat dan mudah dengan melihat resep masakan yang telah kami sajikan dalam website ini. Dan jika anda mempunyai saran atau request untuk resep masakannya di publish silahkan hubungi kontak kami. Kami sangat senang jika ada yang berpartisipasi dalam website resep masakan kami ini.</p>
    </div>
  </div>
  </div>
  </section>
  {{-- End About --}}

  {{-- Start Maps --}}
  <div class="row mb-5 d-flex justify-content-center" id="maps">
    <h2 class="text-center">Alamat Kami</h2>
    <div class="col-md-12  d-flex justify-content-center">
      <div class="card shadow">
        <div class="card-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.82983719091!2d110.43834650000001!3d-6.9848253499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca45a9c52c3%3A0x67e7482251eedfbc!2sUniversitas%20PGRI%20Semarang!5e0!3m2!1sen!2sid!4v1684857305190!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  {{-- End Maps --}}

  {{-- Start Footer --}}
  <footer class="text-white pt-3 pb-4" style="background-color:indianred;">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:18px;">RecipesBox</h5>
          <p style="text-align:justify; font-size:14px">RecipesBox memberikan pengalaman terbaik dalam menghidangkan makanan, pilih dan temukan resep hidanganmu...</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="text-align: justify;">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:18px;">Category</h5>
          <p>
            <a href="/" class="text-white" style="text-decoration: none; font-size:14px">Home..</a>
          </p>
          <p>
            <a href="/recipes-all" class="text-white" style="text-decoration: none; font-size:14px">Recipe..</a>
          </p>
          <p>
            <a href="/recipes/about" class="text-white" style="text-decoration: none; font-size:14px">About Us..</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" style="text-align: left; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:18px;">Contact</h5>
          <p style="text-align: left; font-size:14px">
            <i class="fas fa-home mr-3"></i>&nbsp;Indonesian, 876
          </p>
          <p style="text-align: left; font-size:14px">
            <i class="fas fa-envelope mr-3"></i>&nbsp;recipesbox@gmail.com
          </p>
          <p style="text-align: left; font-size:14px">
            <i class="fas fa-phone mr-3"></i>&nbsp;+62-(811)-(5628)
          </p>
          <p style="text-align: left; font-size:14px">
            <i class="fas fa-print mr-3"></i>&nbsp;recipesbox
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:18px;">Bingung.....?</h5>
          <ul class="list-unstyled list-inline">
            <p style="font-size:14px; text-align:center;">Kirim Pesan ke Admin</p>
            <li class="flex flex-row">
              <input class="rounded-l-[5px] bg-[#f6fcff] w-full md:w-[190.01px] h-[55px] border border-white text-[#404040]" type="email" name="" id="wa-custom">
              <!-- <button onclick="document.location.href='#" class="w-[50.09px] rounded-r-[5px] h-[55px] mb-5 md:mb-0 bg-[#a1b0c7] border border-white px-[13px]">
                                    <img loading="lazy" class="w-[28px] h-[28px]" src="/assets/images/wa.svg">
                                </button> -->
            </li>
          </ul>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p style="font-size:15px">
            &copy; <?php echo date("Y"); ?> RecipeBox |
            <a class="link-github" href="https://github.com/Salman699/RecipeBox" target="_blank">
              <strong class="text-warning">Github <img class="icon-github" src="{{asset('resep_images/icon-github.png')}}" style="width: 2.5%;" />
              </strong>

            </a>
          </p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 15px;"><i class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 15px;"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 15px;"><i class="fab fa-google-plus"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 15px;"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 15px;"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- End Footer --}}
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e7f5845a19.js" crossorigin="anonymous"></script>
</body>

</html>