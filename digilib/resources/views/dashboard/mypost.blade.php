@extends('dashboard.layouts.main')

@section('container')
<div class="pt-5">
<h2>My Post</h2>
<div class="mt-3 mb-3">
<a href="/createpost" class="btn btn-primary">Tambah Buku</a>
</div>
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
                                <a href="{{ route('editbook', ['id' => $p->id]) }}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <a href="{{ route('deletebook', ['id' => $p->id]) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
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
</div> 
@endsection