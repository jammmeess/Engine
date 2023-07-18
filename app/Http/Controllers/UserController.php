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

        return redirect('/register/success');
    }

    public function showRegisterSuccess()
    {
        return view('success');
    }

    // LOGIN LOGOUT//
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', "=", $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('first_name', $user->first_name);
                $request->session()->put('last_name', $user->last_name);
                $request->session()->put('email', $user->email);
                $request->session()->put('role', $user->role);
                $request->session()->put('user_id', $user->user_id);
                if (Session::get('role') == 'user') {
                    return redirect('/userhome');
                }
            } else {
                return redirect('/login')->with('fail', 'Incorrect password');
            }
        } else {
            return redirect('/login')->with('fail', 'Email does not exist');
        }
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login')->with('success', 'You have been logged out!');
    }

    // HOME//

    public function showHome()
    {
        return view('home');
    }

    public function showUserHome()
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();
            return view('userhome', compact('u'));
        } else {
            abort(401);
        }
    }

    // SUPPORT//
    public function showSupport()
    {
        return view('support');
    }

    public function showUserSupport()
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();
            return view('usersupport', compact('u'));
        } else {
            abort(401);
        }
    }

    // RESET PASSWORD//
    public function showForgotpw()
    {
        return view('forgotpw');
    }

    // PROFILE//
    public function showProfile()
    {
        if (Session::has('user_id')) {
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();
            return view('profile', compact('u'));
        } else {
            abort(401);
        }
    }

    public function uploadPhotoProfile(Request $request, string $id)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles'), $filename);

            $user = User::where('user_id', '=', $id)
            ->update([
                'image' => $filename
            ]);

            return redirect('/profile')->with('success', 'Profile picture successfully updated!');
        }
    }
}
