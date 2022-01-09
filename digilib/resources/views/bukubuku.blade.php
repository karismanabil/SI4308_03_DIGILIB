@extends('layouts.main')
@section('container')
<div class="m-5">
    <div class="container" id="">
            <div class="mb-3">    
                <h4 class="text-center">E-Katalog : {{ $title }}</h4>
            </div>
            <div class="mb-3">
                <p class="text-center m-0 p-0">Tersedia berbagai macam buku Jurnal, Artikel, Filsafat, Ilmu Sosial, Agama, dan Bahasa</p>
            </div>
{{-- search --}}
        <form action="/bukubuku">
            <div class="d-flex justify-content-center ">
                <div class="input-group mb-3 w-50 text-center">
                    <input type="text" class=" form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
                    <button  class="btn btn-primary bgblue" type="submit" id="button-addon2">Search</button>
                </div>
            </div>
        </form>

            <hr>
{{-- search close --}}
@if ($posts->count())
{{-- card --}}
            <div class="flex-wrap justify-content-center d-flex py-3">
                @foreach ($posts as $p)
                    
                <div class="mx-2 my-2">
                    <a href="/detailbooks/{{ $p->slug }}" class="text-decoration-none link-dark">
                        <div class="card  h-100" style="width: 14rem;">
                            <img src="/uploaded/{{ $p->gambar }}" class="card-img-top  imgcard" alt="">
                            <div class="position-absolute container-fluid  py-1 text-center" style="background-color:rgba(0, 0, 0, 0.4);"><a class="text-white text-decoration-none" href="/jenis/{{ $p->kategori->slug }}">{{ $p->kategori->nama }}</a></div>
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->title }}</h5>
                                <p class="card-text">{{ $p->excerpt }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>
            <div class="mt-3 d-flex justify-content-center">
                {{ $posts->links() }}   
            </div> 
{{-- card close --}}
@else
<p class="text-center fs-5 fw-bold p-0 m-0">No Book Found.</p>
<p class="text-center p-0 m-0">maybe try to find something similiar like : Creative, Journey, etc.</p>
@endif

{{-- pagination --}}
            
{{-- pagination close --}}
    </div>
</div>

@endsection