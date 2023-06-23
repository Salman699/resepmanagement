@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
    <div class="card-body">
     @if ($resep->Category)
     <h5 class="card-title">Kategori: {{ $resep->Category->name }}</h5>
     @else
     <h5 class="card-title">Kategori: Tidak ada kategori</h5>
     @endif
     <h5 class="card-title">Judul: {{ $resep->title }}</h5>
     <p class="card-text">Resep: {{ $resep->resep }}</p>
     <img src="/resep_images/{{ $resep->images }}" class="card-img-top" alt="">
</div>
</div>
</div>
</div>
</div>
@endsection
