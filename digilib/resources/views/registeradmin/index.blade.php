@extends('layouts.main')
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="">    
                <h4 class="text-center">Register Admin</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" m-5 p-5 shadow-lg col-sm-8">
                    <form action="{{ route('createadmin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input  required type="text" class="form-control " id="name" name="name" placeholder="Nama Lengkap">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  required type="text" class="form-control " id="email" name="email" placeholder="example@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input  required type="password" class="form-control " id="password" name="password" placeholder="Password">
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Register" href="" class="btn btn-primary col-12 mt-2" >
                            <p class="mt-3">Already have an account? <a class="text-decoration-none" href="/loginadmin">Login</a> now!</p>
                            <hr>
                            <p class="mt-3">Are you a User? <a class="text-decoration-none" href="/loginuser">Click here</a>to Login as User!</p>
                            
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection