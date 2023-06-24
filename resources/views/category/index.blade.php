@extends('layouts.main')
@section('title', 'Category')
@section('heading', 'Category')
@section('breadcrumb', 'Category')

@section('content')

@php
$role = Auth::user()-> role ?? null
@endphp

@if($role == 'admin')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{ $message }} </p>
</div>
@endif

<a href="/createcategory" class="btn btn-outline-primary mb-3">Add category</a>

<div class="card">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1
            @endphp

            @foreach ( $category as $data )
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $data-> name }} </td>
                <td>
                    <a href="/editcategory/{{$data->id}}" class="btn btn-outline-warning"> <i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="/deletecategory/{{$data->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')"> <i class="fa-solid fa-trash" href="/editcategory"> </i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<h1>Access denied, only admin allowed to access this page</h1>
@endif
@endsection