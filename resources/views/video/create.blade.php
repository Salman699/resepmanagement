@extends('layouts.main')
@section('title', 'Create Video')
@section('heading', 'Create Video')
@section('breadcrumb', 'Create Video')

@section('content')

<form method="POST" action="/insertvideo">
    @csrf
    <div class="mb-2 col-5">
        <label class=" form-label">Video</label>
        <input type="hidden" name="id_user" value=" {{Auth::user()->id }}">
        <select class="form-control" name="id_resep">
            <option value="">Select resep</option>
            @foreach(App\Models\Resep::get() as $item)
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

<a href="/video" class="ml-2">Back</a>
@endsection