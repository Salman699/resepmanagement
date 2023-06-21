@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="row">
    @php
    $count = 0;
    $showMore = false;
    @endphp
    @foreach ($resep as $row)
    @if ($count < 3)
    <div class="col-md-4 mb-3">
        <div class="card card-detail"> <!-- Add class "card-detail" to make the card larger -->
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $row->title }}</h5>
                <p class="card-text">{{ $row->resep }}</p>
            </div>
        </div>
    </div>
    @else
    @php
    $showMore = true;
    @endphp
    <div class="col-md-4 mb-3 hidden-card">
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


@endsection
