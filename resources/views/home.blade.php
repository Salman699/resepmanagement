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
                <a href="/editresep/{{$row->id}}" class="btn btn-outline-warning">Edit</a>
                
                @if ($row->id_user == Auth::user()->id)
                <a href="/deleteresep/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')">Delete</a>
                @endif
                
                <a href="/detail/{{$row->id}}" class="btn btn-outline-primary">Detail</a>
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
                <a href="/editresep/{{$row->id}}" class="btn btn-outline-warning">Edit</a>
                
                @if ($row->id_user == Auth::user()->id)
                <a href="/deleteresep/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')">Delete</a>
                @endif
                
                <a href="/detail/{{$row->id}}" class="btn btn-outline-primary">Detail</a>
            </div>
        </div>
    </div>
    @endif

    @php
    $count++;
    @endphp
    @endforeach

    @if ($showMore)
    <div class="col-md-12 mt-3" id="moreButtonContainer">
        <button class="btn btn-secondary btn-block" id="moreButton">More</button>
    </div>
    @endif
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cardContainers = document.querySelectorAll('.row');
        cardContainers.forEach(function(cardContainer) {
            cardContainer.addEventListener('click', function(event) {
                var cardDetail = event.target.closest('.card');
                if (cardDetail) {
                    cardDetail.classList.toggle('card-detail');
                }
            });
        });
    });
</script>

@endpush

@endsection