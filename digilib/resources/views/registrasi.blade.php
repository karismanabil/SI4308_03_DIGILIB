@extends('layouts.main')
@section('container')
    <div class="m-5">
        <div class="container">
            <div class="mb-3">    
                <h4 class="text-center">Register</h4>
            </div>
            <div class="d-flex justify-content-center">
                <div class=" m-5 p-5 shadow-lg col-sm-8">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                        </div>

                        <div class="text-center">
                            <button type="submit" href="" class="btn btn-primary col-12 mt-2" name='register'>Register</button>
                            <p class="mt-3">Already have an account? <a href="/login">Login</a> now!</p>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </div>
@endsection