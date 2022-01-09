@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5 pb-5">
<h2 class="mb-3">My Post</h2>
<form action="{{ route('updatebook', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-text">Judul Buku</label>
        <input type="text" name="title" id="" class="form-control " value="{{ $post->title }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Deskripsi Singkat</label>
        <input type="text" name="excerpt" id="" class="form-control "value="{{ $post->excerpt }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Slug (Title URL)</label>
        <input type="text" name="slug" id="" class="form-control "value="{{ $post->slug }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Jenis</label>
        <select name="kategori_id" class="form-select" aria-label="Default select example" >
            <option  selected>{{ $post->kategori_id }}</option>
            @foreach ($jenisjenis as $j)
            <option  value="{{ $j->id }}">{{ $j->id }} = {{ $j->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Penulis</label>
        <input type="text" name="penulis" id="" class="form-control "value="{{ $post->penulis }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Rp</span>
        <input type="number" name="harga" class="form-control"  value="{{ $post->harga }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Abstrak</label>
        <textarea name="abstrak" id="" cols="30" rows="4" class="form-control">{{ $post->abstrak }}</textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-text">Gambar</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="gambar">
    </div>
    <input type="submit" value="Tambahkan" class="btn btn-primary">
</form> 
</div> 
@endsection