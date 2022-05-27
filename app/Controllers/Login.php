<?php

namespace App\Controllers;

use App\Models\Bph_m;
use App\Models\Users_m;

class Login extends BaseController
{
    public function index()
    {
        session();
        helper('form');
        return view('login');
    }

    public function prosesLogin()
    {
        $users = new Users_m();
        $bph = new Bph_m();
        $email = $this->request->getPost('email');
        $password = md5($this->request->getPost('password'));

        $dataUser = $users->where(['user_email' => $email])->first();
        $dinas = $bph->where(['username' => $dataUser['user_name']])->first();

        // dd($password == $dataUser['user_password']);
        if ($dataUser) {
            if ($password == $dataUser['user_password']) {
                session()->set([
                    'email' => $dataUser['user_email'],
                    'user_level' => $dataUser['user_level'],
                    'dinas' => $dinas['dinas'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('shortlink'));
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
}
