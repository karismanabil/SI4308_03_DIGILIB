@extends('layouts.main')
@section('container')
<div class="m-5">
    <div class="container" id="">
        <h4 class="text-center fs-3">Pinjam Buku : {{ $post->title }} </h4>
<form action="{{ route('createpinjam') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-text">ID Buku</label>
    <input type="text" name="post_id" value="{{ $post->id }}" id="" class="form-control mb-3" readonly="true">
    <label for="" class="form-text">Harga</label>
    <input type="text" name="harga" value="{{ $post->harga }}" id="" class="form-control mb-3" readonly="true">
    <label for="" class="form-text">Nama Lengkap</label>
    <input type="text" name="nama" id="" class="form-control mb-3">
    {{-- <label for="" class="form-text">Email</label>
    <input type="email" name="email" id="" class="form-control mb-3"> --}}
    <label for="" class="form-text">NIK</label>
    <input type="text" name="nik" class="form-control mb-3">
    <label for="" class="form-text">No Hp</label>
    <input type="text" name="no_hp" class="form-control mb-3">
    <div class="mb-3">
        <label for="" class="form-text">KTM</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="gambar">
    </div>
    <input type="hidden" name="status" value="meminjam" >
    <input type="hidden" name="denda" value="0">
    <input type="submit" value="Pinjam" class="btn btn-primary">
</form>
    </div>
</div>

@endsection