@extends('layouts.main')

@section('title', 'Detail Resep')
@section('heading', 'Detail Resep')
@section('breadcrumb', 'Detail Resep')

@section('content')
<div class="container">
     <div class="row mb-3">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Detail Makanan</h4>
                    </div>
                    <div class="mb-2 col-6">
                        <label class="form-label">Category</label>
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <select class="form-control" name="id_category">
                            <option value="{{$resep->id}}">{{$resep->Category->name ?? null}}</option>
                            @foreach(App\Models\Categories::get() as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->name }}
                           </option>
                           @endforeach
                      </select>
                 </div>
                 @extends('layouts.main')

                 @section('title', 'Detail Resep')
                 @section('heading', 'Detail Resep')
                 @section('breadcrumb', 'Detail Resep')

                 @section('content')
                 <div class="container">
                     <div class="row mb-3">
                      <div class="col-md-12">
                       <div class="card shadow">
                        <div class="card-header">
                         <h4>Detail Makanan</h4>
                    </div>
                    <form action="{{ route('resep.update', $resep->id) }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <div class="mb-2 col-6">
                          <label class="form-label">Category</label>
                          <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                          <select class="form-control" name="id_category">
                           <option value="{{$resep->id}}">{{$resep->Category->name ?? null}}</option>
                           @foreach(App\Models\Categories::get() as $item)
                           <option value="{{ $item->id }}" {{ $resep->id_category == $item->id ? 'selected' : '' }}>
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
                <textarea name="resep" id="" cols="40" rows="10" required>{{$resep->resep}}</textarea>
           </div>

           <div class="mt-3 col-6">
                <label class="form-label">Images</label>
                <img src="/resep_images/{{ $resep->images }}" width="200" alt="">
                <input type="file" class="form-control" name="images">
           </div>

           <div class="card-footer">
                <a href="{{ route('resep.index') }}" class="btn btn-secondary float-end">Kembali</a>
                <button type="submit" class="btn btn-primary float-end me-2">Simpan</button>
           </div>
      </form>
 </div>
</div>
</div>
</div>
@endsection

<div class="mb-2 col-6">
    <label class="form-label">Judul</label>
    <input type="text" class="form-control" name="title" value="{{$resep->title}}" required>
</div>


<div class="mb-3">
    <label class="form-label">Resep</label>
    <textarea name="resep" id="" cols="40" rows="10" required>{{$resep->resep}}</textarea>
</div>


<div class="mt-3 col-6">
    <label class="form-label">Images</label>
    <img src="/resep_images/{{ $resep->images }}" width="200" alt="">
    <input type="file" class="form-control" name="images" value="{{$resep->images}}">
</div>

<div class="card-footer">
 <a href="{{ route('resep.index') }}" class="btn btn-secondary float-end">Kembali</a>
</div>
</div>
</div>
</div>
</div>
@endsection