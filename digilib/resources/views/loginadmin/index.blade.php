@extends('layouts.main')
@section('container')
    <div class="m-5 ">
        <div class="container">
            <div class="">    
                <h4 class="text-center">Login Admin</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" m-5 p-5 shadow-lg col-sm-8">
                    <form action="{{ route('loginadminwork') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  required autofocus type="email" class="form-control" 
                        id="email" name="email" placeholder="Email@domain.com">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                    
                        <div class="text-center">
                            <button type="submit" href="" class="btn btn-primary col-12" name='register'>Login</button>
                            <p class="mt-3">Don't have an account yet? <a class="text-decoration-none" href="/registeradmin">Register</a> now!</p>
                            <hr>
                            <p class="">Are you a User? <a class="text-decoration-none" href="/registeruser">Click here</a> to Register as User!</p>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection