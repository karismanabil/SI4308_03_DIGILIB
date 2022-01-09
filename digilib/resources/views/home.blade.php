@extends('layouts.main')

        
@section('container')
<div class="text-center bg-dark">
{{-- <iframe  id="iFrame1" class="justify-content-center" width="1200" height="700" src="https://www.youtube.com/embed/BxGf94oT8k0?playlist=BxGf94oT8k0&iv_load_policy=3&enablejsapi=1&disablekb=1&autoplay=1&controls=0&showinfo=0&rel=0&loop=1&wmode=transparent&widgetid=1&mute=1" frameborder="0"></iframe> --}}
</div>
<div class="m-5">
    <div class="container" id="home">
        <div class="m-5">
            <div class="container" id="home">
                    <div class="mb-3">    
                        <h4 class="text-center">E-Katalog</h4>
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
{{-- card close --}}
@else
<p class="text-center fs-5 fw-bold p-0 m-0">No Book Found.</p>
<p class="text-center p-0 m-0">maybe try to find something similiar like : Creative, Journey, etc.</p>
@endif
        
        {{-- pagination --}}
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="/bukubuku" class="btn bgblue btn-primary">Lihat Lebih Banyak</a> 
                    </div> 
        {{-- pagination close --}}
            </div>
        </div>
{{-- pagination close --}}
    </div>
</div>
@endsection