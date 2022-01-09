@extends('layouts.main')
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="">    
                <h4 class="text-center">Register</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" m-5 p-5 shadow-lg col-sm-8">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input  required type="text" class="form-control " id="name" name="name" placeholder="Nama Lengkap">
                            {{-- @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  required type="text" class="form-control " id="email" name="email" placeholder="example@gmail.com">
                            {{-- @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input  required type="password" class="form-control " id="password" name="password" placeholder="Password">
                            {{-- @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        <div class="text-center">
                            <button type="submit" href="" class="btn btn-primary col-12 mt-2" name='register'>Register</button>
                            <p class="mt-3">Already have an account? <a class="text-decoration-none" href="/loginuser">Login</a> now!</p>
                            <hr>
                            <p class="mt-3">Are you an admin? <a class="text-decoration-none" href="/loginadmin">Click here</a> to Login as Admin!</p>
                            
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection