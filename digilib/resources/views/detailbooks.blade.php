@extends('layouts.main')
<link rel="stylesheet" href="/cssku/style.css">

        
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="mb-3">    
                <h4 class="text-center">Detail Books</h4>
            </div>
            <div class="row p-5 shadow-lg">
                <div class="col-3">
                    <div class="mb-3 d-flex justify-content-center ">
                        <img src="/uploaded/{{ $post->gambar }}" class="imgcard" alt="">
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-warning shadow-sm ">Add to Favorite</button>
                    
                        <button class="btn btn-success shadow-sm ">Download</button>
                        
                        <a href="{{route('pinjam', ['id' => $post->id])}}" class="btn btn-primary shadow-sm ">Borrow the book</a>
                    
                        <button class="btn btn-light shadow-sm ">Add Review</button>
                    </div>
                </div>
                <div class="col-9 shadow-sm p-0">
                    <span class="py-2 bgblue pe-auto d-flex justify-content-center text-light">Informasi Buku</span>
                    <div class="p-5">
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Judul</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">{{ $post->title }}</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Jenis</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <a class="text-decoration-none" href="/jenis/{{ $post->kategori->slug }}"><p class="p-0 m-0">{{ $post->kategori->nama }}</p></a>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Tanggal Rilis</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">{{ $post->tanggal_rilis }}</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Penulis</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">{{ $post->penulis }}</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Harga</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">Rp{{ $post->harga }}</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Abstrak</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">{{ $post->abstrak }}</p>
                            </div>
                        </div>
                        
                    </div>
                    {{-- <p class="me-3 float-end ">Posted by {{ $post->user->name }}</p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


