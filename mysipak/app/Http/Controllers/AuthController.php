<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if($strlen == 18) {
                $field = 'nip';
            }
            if($strlen == 10) {
                $field = 'nidn';
            }
        }
        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;
        if(auth()->attempt($credential, $remember)) {
            $user = auth()->user();
            return $this->manageRedirect($user);
        } else {
            return view('auth.login', ['message' => 'Login Gagal']);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }

    public function manageRedirect($user)
    {
        $list_role = $user->role;
        $firstrole = $list_role->first();
        $url = $firstrole->module->url;
        return redirect($url);
    }
}
