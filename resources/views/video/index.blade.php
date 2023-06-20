@extends('layouts.main')

@section('title', 'Video')
@section('heading', 'Video')
@section('breadcrumb', 'Video')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{ $message }} </p>
</div>
@endif

<a href="/createvideo" class="btn btn-outline-primary mb-3">Add video</a>

<div class="card">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Resep</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($video as $row )
            <tr>
                <td> {{ $row-> id}} </td>
                <td> {{ $row-> Resep -> title ?? null }} </td>
                <td>
                    <x-embed url="{{$row->video}}" />
                </td>
                <td>
                    <a href="/editvideo/{{$row->id}}" class="btn btn-outline-warning"> <i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="/deletevideo/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection