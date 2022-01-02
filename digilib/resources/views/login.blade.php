@extends('layouts.main')
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="mb-3">    
                <h2 class="text-center">Login</h2>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row m-5 p-5 shadow-lg col-sm-8">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="col-sm-2 col-form-label">password</label>
                            <div class="col-sm-12">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <p>Forgot Password?</p>
                        </div>

                        <div class="text-center">
                            <button type="submit" href="" class="btn btn-primary col-12" name='register'>Login</button>
                            <p class="mt-3">Don't have an account yet? <a href="/register">Register</a> now!</p>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection