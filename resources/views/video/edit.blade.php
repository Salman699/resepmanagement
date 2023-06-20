@extends('layouts.main')
@section('title', 'Edit Video')
@section('heading', 'Edit Video')
@section('breadcrumb', 'Edit Video')

@section('content')

<form method="POST" action="/updatevideo/{{$video -> id}}" enctype="multipart/form-data">

    @csrf

    <div class="mb-2 col-5">
        <label class=" form-label"> Video </label>
        <input type="hidden" name="id_user" value=" {{Auth::user()->id}}">
        <select class="form-control" name="id_resep">
            <option value="">Select resep</option>
            @php
            $id = Auth::user()->id;
            @endphp

            @foreach(App\Models\Resep::where('id_user', $id)->get() as $item)
            <option value="{{ $item->id }}">
                {{$item->title}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-2 col-5">
        <label class="form-label">Video</label>
        <input type="url" class="form-control" name="video">
    </div>
    <button type="submit" class="btn btn-primary mt-2 mb-3 ml-2">Submit</button>
</form>
@endsection