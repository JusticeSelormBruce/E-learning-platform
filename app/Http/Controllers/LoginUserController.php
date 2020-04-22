<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function LoginUser()
    {

        $data = $this->validateLoginDetails();
        $email = strtolower($data['email']);
        $user = DB::table('users')->where('email', $email)->first();
        if (Hash::check($data['password'], $user->password)) {
            if ($user->role_id == 1) {
                Session::put('student','$user');
                return redirect('student/dashboard');
            }
            if ($user->role_id >= 2) {
                Session::put('admin','$user');
                return redirect('admin-dashboard');
            }

        }
        if (!Hash::check($data['password'], $user->password)) {
            return back();
        }

    }

    public function validateLoginDetails()
    {
        return request()->validate(
            [
                'email' => 'email|required|string',
                'password' => 'string|required'
            ]
        );
    }
}
