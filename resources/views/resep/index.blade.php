@extends('layouts.main')
@section('title', 'Resep')
@section('heading', 'Resep')
@section('breadcrumb', 'Resep')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{ $message }} </p>
</div>
@endif

<a href="/createresep" class="btn btn-outline-primary mb-3">Add recep</a>

<div class="card">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id_category</th>
                <th>Judul</th>
                <th>Resep</th>
                <th>Images</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1
            @endphp

            @foreach ( $resep as $row )
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{$row -> Category -> name ?? null}} </td>
                <td> {{$row -> title}} </td>
                <td> {{$row -> resep}} </td>
                <td>
                    <img src="/resep_images/{{ $row->images }}" width="100" alt="">
                </td>
                <td>
                    <a href="/editresep/{{$row->id}}" class="btn btn-outline-warning"> <i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="/deleteresep/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Confirm to delete data?')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection