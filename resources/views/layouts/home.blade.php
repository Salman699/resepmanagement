<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<body>

 <!-- Navbar -->
 @include('layouts.fe_navbar')
    <!-- /.navbar -->

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
              <h1>Welcome RecipesBox</h1>
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
  <section class="product style-2 padding-tb" style="background-color:darkseagreen" id="resep">
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

   <!-- Footer -->
   @include('layouts.fe_footer')
    <!-- /.Footer -->

  
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e7f5845a19.js" crossorigin="anonymous"></script>
</body>

</html>