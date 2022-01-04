@extends('layouts.main')

        
@section('container')
<div class="text-center bg-dark">
<iframe  id="iFrame1" class="justify-content-center" width="1200" height="700" src="https://www.youtube.com/embed/BxGf94oT8k0?playlist=BxGf94oT8k0&iv_load_policy=3&enablejsapi=1&disablekb=1&autoplay=1&controls=0&showinfo=0&rel=0&loop=1&wmode=transparent&widgetid=1&mute=1" frameborder="0"></iframe>
</div>
<div class="m-5">
    <div class="container">
            <div class="mb-3">    
                <h4 class="text-center">E-Katalog</h4>
            </div>
            <div class="mb-3">
                <p class="text-center m-0 p-0">Tersedia berbagai macam buku Jurnal, Artikel, Filsafat, Ilmu Sosial, Agama, dan Bahasa</p>
            </div>
{{-- search --}}
            <div class="d-flex justify-content-center ">
                <div class="input-group mb-3 w-50 text-center">
                    <input type="text" class=" form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary bgblue" type="button" id="button-addon2">Find</button>
                </div>
            </div>
            <hr>
{{-- search close --}}
{{-- card --}}
            <div class="flex-wrap justify-content-center d-flex py-3">
                @foreach ($katalog as $display)
                    
                <div class="mx-2">
                    <a href="/detailbooks/{{ $display["slug"] }}" class="text-decoration-none link-dark">
                        <div class="card  h-100" style="width: 14rem;">
                            <img src="{{ $display["gambar"] }}" class="card-img-top imgcard" alt="">
                            <div class="card-body">
                            <h5 class="card-title">{{ $display["title"] }}</h5>
                            <p class="card-text">{{ $display["slug"] }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>
{{-- card close --}}
{{-- pagination --}}
            <div class="mt-3 d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </nav>   
            </div> 
{{-- pagination close --}}
    </div>
</div>
@endsection