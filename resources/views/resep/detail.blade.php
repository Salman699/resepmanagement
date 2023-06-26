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

          <br><br><br>
          <div class="container" align="center">
               <div class="col-lg-12 col-12" style="padding: 100px">
                    <div class="card mb-3" style="max-width: 800px;">
                         <div class="row g-0">
                              <div class="col-md-4">
                                   <img src="/resep_images/{{ $resep->images }}" class="img-thumbnail float-left" alt="">
                              </div>
                              <div class="col-md-8">
                                   <div class="card-body">
                                        <h5 class="card-title" align="left">Judul: {{ $resep->title }}</h5>
                                        @if ($resep->Category)
                                        <h5 class="card-title" align="left">Kategori: {{ $resep->Category->name }}</h5>
                                        @else
                                        <h5 class="card-title" align="justify">Kategori: Tidak ada kategori</h5>
                                        @endif
                                        <h5 align="left">Resep:</h5>
                                        <textarea class="card-text" align="left" cols="40" rows="20" readonly>{{ $resep->resep }}</textarea>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                         <a href="{{ route('home') }}" class="btn btn-primary btn-md">Back</a>
                    </div>
               </div>
          </div>

          <!-- Navbar -->
          @include('layouts.fe_footer')
          <!-- /.navbar -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/e7f5845a19.js" crossorigin="anonymous"></script>
     </body>

     </html>