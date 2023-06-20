@extends('layouts.main')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')

@php
$role = Auth::user()->role ?? null
@endphp

@if ($role == 'admin')

<h3 class="ml-2">Welcome, {{ Auth::user()->name }} ! </h3>
<div class="row">
    <div class="col-md-4 ml-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">Category</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\Categories::count() }} Category
                </p>
                <a href="/category" class="card-link"> Category </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">Resep</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\Resep::count() }} Resep
                </p>
                <a href="/resep" class="card-link"> Resep </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 ml-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">Video</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\Video::count() }} Video
                </p>
                <a href="/video" class="card-link"> Video </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">User</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\User::count() }} User
                </p>
                <a href="/user" class="card-link"> User </a>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-4 ml-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">Resep</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\Resep::count() }} Resep
                </p>
                <a href="/resep" class="card-link"> Resep </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title text-primary">Video</h1>

                <p class="card-text text-danger">
                    {{ $data = App\Models\Video::count() }} Video
                </p>
                <a href="/video" class="card-link"> Video </a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection