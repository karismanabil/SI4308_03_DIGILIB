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
                        <img src="{{ $detail["gambar"] }}" class="imgcard" alt="">
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-warning shadow-sm ">Add to Favorite</button>
                    
                        <button class="btn btn-success shadow-sm ">Download</button>
                    
                        <button class="btn btn-primary shadow-sm ">Borrow the book</button>
                    
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
                                <p class="p-0 m-0">{{ $detail["title"] }}</p>
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
                                <p class="p-0 m-0">{{ $detail["jenis"] }}</p>
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
                                <p class="p-0 m-0">12 Aug 2021</p>
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
                                <p class="p-0 m-0">{{ $detail["penulis"] }}</p>
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
                                <p class="p-0 m-0">Rp{{ $detail["harga"] }}</p>
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
                                <p class="p-0 m-0">{{ $detail["abstrak"] }}</p>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection