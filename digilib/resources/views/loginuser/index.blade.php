@extends('layouts.main')
@section('container')
        {{-- alert regis success--}}
        {{-- @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif --}}
        {{-- alert close --}}
        {{-- alert login failed --}}
          {{-- alert --}}
        {{-- @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif --}}
        {{-- alert close --}}
        {{-- alert close --}}
    <div class="m-5">
        <div class="container">
            <div class="">    
                <h4 class="text-center">Login</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" m-5 p-5 shadow-lg col-sm-8">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  required autofocus type="email" class="form-control 
                            {{-- @error('email')
                            is-invalid
                        @enderror --}}
                        " 
                        id="email" name="email" placeholder="Email@domain.com">
                        {{-- @error('email')
                         <div class="invalid-feedback">{{ $message }}</div>   
                        @enderror --}}
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                    
                        <div class="text-center">
                            <button type="submit" href="" class="btn btn-primary col-12" name='register'>Login</button>
                            <p class="mt-3">Don't have an account yet? <a class="text-decoration-none" href="/registeruser">Register</a> now!</p>
                            <hr>
                            <p class="mt-3">Are you an admin? <a class="text-decoration-none" href="/registeradmin">Click here</a> to Register as Admin!</p>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection