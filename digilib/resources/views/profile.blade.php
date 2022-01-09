@extends('layouts.main')
<link rel="stylesheet" href="/cssku/style.css">


<div class="flex-wrap justify-content-center d-flex py-3">
    <div class="mx-2 my-2">
        <a href="" class="text-decoration-none link-dark">
            <div class="card  h-100" style="width: 14rem;">
                <img src="" class="card-img-top imgcard" alt="">
                <div class="card-body">
                <h5 class="card-title">as</h5>
                <p class="card-text">sd</p>
                </div>
            </div>
        </a>
    </div>
</div>

{{-- Profile --}}
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="mb-3">    
                <h3 class="text-center">User Profile</h3>
            </div>
            <div class="row p-5 shadow-lg">
                <div class="col-3">
                    <div class="mb-3 d-flex justify-content-center ">
                        <img src="img/profile.png" class="imgcard" alt="">
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-info shadow-sm">Edit User Profile</button>
                    </div>
                </div>
                <div class="col-9 p-0">
                    <div class="p-5">
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <h5 class="p-0 m-0">Biodata Diri</h5>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0">Username</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0 form-control">kharisma_kun</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Nama</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0"></p>Karisma Nabil Santosa</a>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">NIM</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">1202194261</p>
                            </div>
                        </div>
                        <br>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <h5 class="p-0 m-0">Kontak</h5>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Email</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0">kharismanabil@gmail.com</p>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <div class="col-2 p-0">
                                <p class="p-0 m-0 ">Nomor Hp</p>
                            </div>
                            <div class="col-1 p-0">
                                <p class="p-0 m-0 text-center">:</p>
                            </div>
                            <div class="col-9 p-0">
                                <p class="p-0 m-0"></p>082208220822</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Profile close --}}


