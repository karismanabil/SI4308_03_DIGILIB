<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        //validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'

        ]);
        //enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        //masukin ke database
        User::create($validatedData);
        
        //message
        // $request->session()->flash('succes', 'Registration successfull! Please Login!');

        //kembali
        return redirect('/login')->with('success', 'Registration successfull! Please Login!');
    }
}

