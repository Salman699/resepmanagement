@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="row">
    @foreach ($resep as $row)
    <div class="col-md-3 mb-6">
        <div class="card card-detail">
            <!-- Hapus baris berikut yang menampilkan gambar -->
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="" style="height: 230px;">
            <div class="card-body" style="width: 75%;">
                <h5 class="card-title">{{ $row->title }}</h5>
                <!-- Hapus baris berikut yang menampilkan deskripsi resep -->
                <!-- <p class="card-text">{{ $row->resep }}</p> -->
                <a href="{{ route('detail', $row->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection