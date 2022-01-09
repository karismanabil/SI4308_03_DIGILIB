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
{{-- card --}}
            <div class="flex-wrap justify-content-center d-flex py-3">
                @foreach ($jenisjenis as $j)
                    
                <div class="mx-2 my-2">
                    <a href="/jenis/{{ $j->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/200x200?{{ $j->nama }}" class="card-img" alt="{{ $j->nama }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                          <h5 class="card-title text-center flex-fill p-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $j->nama }}</h5>
                        </div>
                      </div>
                    </a>
                </div>

                @endforeach

            </div>
{{-- card close --}}
            
    </div>
</div>
@endsection