@extends('layouts.main')

@section('title', 'Edit Category')
@section('heading', 'Edit Category')
@section('breadcrumb', 'Edit Category')

@section('content')

@php
$role = Auth::user()-> role ?? null
@endphp

@if($role == 'admin')
<form method="post" action="/updatecategory/{{$category -> id}}">
    @csrf
    <div class="mb-2 ml-3">
        <div class="row">
            <label class="form-label"> Category </label>
            <input type="text" class="form-control" value="{{$category->name}}" name="name">
        </div>
        <button type="submit" class="btn btn-primary mt-2 mr-2 ">Submit</button>
    </div>
</form>

<a href="/category" class="ml-3"> Back </a>
@else
<h1>Access denied, only admin allowed to access this page</h1>
@endif
@endsection