@extends('layouts.main')
@section('title', 'User')
@section('heading', 'User')
@section('breadcrumb', 'User')

@section('content')

@php
$role = Auth::user()-> role ?? null
@endphp

@if($role == 'admin')

<a href="/createuser" class="btn btn-outline-primary mb-2 disabled"> Add user </a>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{ $message }} </p>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @php
                $no = 1
                @endphp
                @foreach ($user as $row)
                <tr>
                    <td> {{ $no++ }} </td>
                    <td> {{ $row-> name}} </td>
                    <td> {{ $row-> email }} </td>
                    <td> {{ $row-> role }} </td>
                    <td>
                        <a href="/edituser/{{$row->id}}" class="btn btn-outline-warning"> <i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="/deletevideo/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<h1>Access denied, only admin allowed to access this page</h1>
@endif
@endsection