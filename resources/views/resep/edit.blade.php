@extends('layouts.main')
@section('title', 'Edit Resep')
@section('heading', 'Edit Resep')
@section('breadcrumb', 'Edit Resep')

@section('content')

<form method="POST" action="/updateresep/{{$resep -> id}}" enctype="multipart/form-data">

    @csrf

    <div class="mb-2 col-6">
        <label class=" form-label">Category</label>
        <input type="hidden" name="id_user" value=" {{Auth::user()->id }}">
        <select class="form-control" name="id_category">
            <option value="{{$resep->id}}">{{$resep->Category->name ?? null}} </option>
            @foreach(App\Models\Categories::get() as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-2 col-6">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="title" value="{{$resep->title}}" required>
    </div>


    <div class="mb-3">
        <label class="form-label">Resep</label>
        <textarea name="resep" id="" cols="40" rows="10" required> {{$resep->resep}} </textarea>
    </div>


    <div class="mt-3 col-6">
        <label class="form-label">Images</label>
        <img src="/resep_images/{{ $resep->images }}" width="200" alt="">
        <input type="file" class="form-control" name="images" value="{{$resep->images}}">
    </div>
    <button type="submit" class="btn btn-primary mt-2 mb-3 ml-2">Submit</button>

</form>

<a href="/resep">Back</a>
@endsection