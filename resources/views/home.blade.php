@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="row">
<<<<<<< HEAD
    @php
    $count = 0;
    $showMore = false;
    @endphp
    @foreach ($resep as $row)
    @if ($count < 3)
    <div class="col-md-3 mb-4">
        <div class="card card-detail"> <!-- Add class "card-detail" to make the card larger -->
=======
    @foreach ($resep as $row)
    <div class="col-md-4 mb-3">
        <div class="card card-detail">
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $row->title }}</h5>
                <p class="card-text">{{ $row->resep }}</p>
<<<<<<< HEAD
            </div>
        </div>
    </div>
    @else
    @php
    $showMore = true;
    @endphp
    <div class="col-md-3 mb-4 hidden-card">
        <div class="card card-detail"> <!-- Add class "card-detail" to make the card larger -->
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $row->title }}</h5>
                <p class="card-text">{{ $row->resep }}</p>
            </div>
        </div>
    </div>
    @endif

    @php
    $count++;
    @endphp
    @endforeach
</div>


=======
                <a href="{{ route('detail', $row->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
@endsection
