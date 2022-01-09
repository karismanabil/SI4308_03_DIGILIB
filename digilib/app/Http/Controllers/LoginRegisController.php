<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pengguna;

use Illuminate\Http\Request;

class LoginRegisController extends Controller
{
    public function loginuser(){
        return view('loginuser.index',[
            'title' => 'Login'
        ]);
    }



    public function registeruser(){
        return view('registeruser.index',[
            'title' => 'Register'
        ]);
    }

    public function loginadmin(){
        return view('loginadmin.index',[
            'title' => 'Login'
        ]);
    }

    public function registeradmin(){
        return view('registeradmin.index',[
            'title' => 'Register'
        ]);
    }

    public function createadmin(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $admin = new admin();
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = bcrypt($password);
        $admin->save();
        return redirect('/loginadmin');
    }
    
    public function loginadminwork(Request $request){
        $email = $request->email;
        $password = $request->password;
        $emailbool = admin::where('email', $email)->exists();
        $passwordbool = admin::where('password', $password)->exists();
        $status = $emailbool && $passwordbool;
        if($status){
            $admin = admin::where('email',$email)->get();
            session(['id' => $admin[0]->id]);
            session(['name' => $admin[0]->name]);
            session(['email' => $admin[0]->email]);
            session(['is_login' => 'True']);
            return redirect('/');
        }
        else{
            return redirect('/loginadmin');
        }
    }
}
