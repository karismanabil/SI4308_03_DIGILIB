@extends('layouts.main')

        
@section('container')
<div class="m-5">
    <div class="container">
            <div class="mb-3">    
                <h4 class="text-center">Jenis E-Katalog</h4>
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
                @foreach ($jenisjenis as $j)
                    
                <div class="mx-2 my-2">
                    <a href="/jenis/{{ $j->slug }}" class="text-decoration-none link-dark">
                    <div class="card text-dark bg-light mb-3" style="max-width: 14rem;">
                        <div class="card-header">Jenis E-Katalog</div>
                        <div class="card-body">
                          <h5 class="card-title">{{ $j->nama }}</h5>
                          <p class="card-text">Jenis {{ $j->nama }} berisi beberapa buku yang dapat anda baca</p>
                        </div>
                      </div>
                    </a>
                    {{-- <ul>
                        <li>
                            <a href="/jenis/{{ $j->slug }}" class="text-decoration-none link-dark">
                            {{ $j->nama }}
                            </a>
                        </li>
                    </ul> --}}
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