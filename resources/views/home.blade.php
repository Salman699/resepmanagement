@extends('layouts.home')

@section('title', 'Home | Detail Makanan')

@section('content')
<div class="row">
    @foreach ($resep as $row)
    <div class="col-md-4 mb-3">
        <div class="card">
            <img src="/resep_images/{{ $row->images }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $row->title }}</h5>
                <p class="card-text">{{ $row->resep }}</p>
                <a href="/editresep/{{$row->id}}" class="btn btn-outline-warning">Edit</a>
                <a href="/deleteresep/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
