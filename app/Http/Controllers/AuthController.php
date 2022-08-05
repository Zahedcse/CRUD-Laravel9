<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        // $name = $request->name;
        // $email = $request->email;
        // $role = $request->role;
        // $password = $request->password;

        // $obj = new User;
        // $obj->name = $name;
        // $obj->email = $email;
        // $obj->role = $role;
        // $obj->password = $password;
        // if ($obj->save()) {
        //     echo "data saved successfully";
        // }
        User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);
    }
    public function loginstore(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;

        // $user = User::where('email', $email)
        //         ->where('password', $password)
        //         ->first();

        // // dd($user);
        // if ($user) {
        //     // echo "User Found";
        //     $name = $user->name;
        //     $role = $user->role;
        //     Session::put('username', $name);
        //     Session::put('userrole', $role);
        //     return redirect()->to('home');
        // } else {
        //     return redirect()->back()->with('msg', 'Invalid Email or Password');
        // }

        $email = $request->email;
        $password = $request->password;

        $users = User::where('email', $email)
                ->where('password', $password)
                ->first();

        if ($users) {
            $name = $users->name;
            $role = $users->role;

            Session::put('username', $name);
            Session::put('userrole', $role);
            // if (Session::has('userrole') && Session::get('userrole')=='admin') {
            //     return redirect()->to('home');
            // } else {
            //     return redirect()->to('edit');
            // }
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('msg', 'Invalid Credentials Provided');
        }
    }
    public function logout()
    {
        Session::flash('username');
        Session::flash('userrole');
        return redirect()->to('login');
    }
}
