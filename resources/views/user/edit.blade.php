@extends('layouts.main')

@section('title', 'Edit User')
@section('heading', 'Edit User')
@section('breadcrumb', 'Edit User')

@section('content')

@php
$role = Auth::user()-> role ?? null
@endphp

@if($role == 'admin')

<form method="POST" action="/updateuser/{{$user -> id}}" enctype="multipart/form-data">

    @csrf

    <div class="mb-2 col-6">
        <label class="form-label">Role</label>

        @php
        $role= $user->role
        @endphp

        <select class="form-control" name="role">
            <option value="admin" {{$role === 'admin' ? 'selected="selected"' : '' }}> admin </option>
            <option value="user" {{ $role === 'user' ? 'selected="selected"' : '' }}> user </option>
        </select>
    </div>

    <div class="mb-2 col-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" id="" cols="40" rows="10" value="{{$user->email}}" readonly>
    </div>

    <button type="submit" class="btn btn-primary mt-2 mb-3 ml-2">Submit</button>
</form>

<a href="/user">Back</a>

@else
<h1>Access denied, only admin allowed to access this page</h1>
@endif
@endsection