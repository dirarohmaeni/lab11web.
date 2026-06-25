<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';

        $model = new UserModel();
        $users = $model->findAll();

        return view('user/index', compact('users', 'title'));
    }

    public function login()
    {
        helper(['form']);

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (!$email) {
            return view('user/login');
        }

        $session = session();
        $model = new UserModel();

        // Cari user berdasarkan email
        $user = $model->where('useremail', trim($email))->first();

        if ($user) {

            if (password_verify($password, $user['userpassword'])) {

                $session->set([
                    'user_id'    => $user['id'],
                    'user_name'  => $user['username'],
                    'user_email' => $user['useremail'],
                    'logged_in'  => true,
                ]);

                return redirect()->to('/admin/artikel');

            } else {

                $session->setFlashdata('error', 'Password salah.');
                return redirect()->to('/user/login');

            }

        } else {

            $session->setFlashdata('error', 'Email tidak terdaftar.');
            return redirect()->to('/user/login');

        }
    }

    public function apiLogin()
    {
        $model = new UserModel();

        $email = $this->request->getVar('useremail');
        $password = $this->request->getVar('userpassword');

        $user = $model->where('useremail', $email)->first();

        if (!$user) {

            return $this->response->setJSON([
                'status'  => 401,
                'message' => 'Email tidak ditemukan'
            ]);

        }

        if (!password_verify($password, $user['userpassword'])) {

            return $this->response->setJSON([
                'status'  => 401,
                'message' => 'Password salah'
            ]);

        }

        session()->set([
            'logged_in' => true,
            'user_id'   => $user['id'],
            'username'  => $user['username']
        ]);

        return $this->response->setJSON([
            'status'  => 200,
            'message' => 'Login berhasil'
        ]);
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/user/login');
    }
}