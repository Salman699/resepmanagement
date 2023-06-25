@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="row">
    @foreach ($resep as $row)
    <div class="col-md-3 mb-6">
        <div class="card card-detail">
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $row->title }}</h5>
                <p class="card-text">{{ $row->resep }}</p>
                <a href="{{ route('detail', $row->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
