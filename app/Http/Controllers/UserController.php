<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Session;
use DB;

class UserController extends Controller
{

    // REGISTER//

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|unique:email_address',
        //     'username' => 'required',
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'phone_number' => 'required|min:11|max:11',
        //     'password' => 'required',
        //     'birthday' => 'required',
        // ]);

        $user = new User;
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birthday = $request->input('birthday');
        // $user->phone_number = $request->input('phone_number');
        $user->password = bcrypt($request->input('password'));
        $user->role = "user";
        $user->save();

        return redirect('/login/register/success');
    }

    public function showRegisterSuccess()
    {
        return view('success');
    }

    // LOGIN//
    public function showLogin()
    {
        return view('login');
    }

    // HOME//

    public function showHome()
    {
        return view('home');
    }
}
