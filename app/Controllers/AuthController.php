<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        if (session()->get('login')) {
            session()->setFlashdata('gagal', "Tidak bisa mengakses");

            if (session()->get('role') === "admin") {
                return redirect()->to("/admin/home");
            }

            if (session()->get('role') === "user") {
                return redirect()->to("/user/home");
            }
        }

        return view('auth/login');
    }

    public function registrasi()
    {

        if (session()->get('login')) {
            session()->setFlashdata('gagal', "Tidak bisa mengakses");

            if (session()->get('role') === "admin") {
                return redirect()->to("/admin/home");
            }

            if (session()->get('role') === "user") {
                return redirect()->to("/user/home");
            }
        }

        return view('auth/registrasi');
    }

    public function user()
    {
        return view('user/index');
    }

    // funcsi menambah kan akun
    public function tambahakun()
    {
        $data = $this->request->getVar();
        $username = $data['username'];


        // jika username sudah asda
        if (
            count($this->userModel->where('username', $username)->find()) > 0
        ) {
            session()->setFlashdata('gagal', "Username tidak tersedia");
            return redirect()->back();
        }

        // jika password dan confirm password tidak samas
        if ($data['password'] != $data['confirm-password']) {
            session()->setFlashdata('gagal', "Confirm password berbeda");
            return redirect()->back();
        }

        try {
            $this->userModel->insert($data);
            session()->setFlashdata('success', "Akun berhasil dibuat");
        } catch (\Exception $e) {
            session()->setFlashdata('gagal', $e);
        }

        return redirect()->back();
    }

    public function cobaLogin()
    {
        $data = $this->request->getVar();

        $credential = $this->userModel->where("username", $data['username'])->find();
        // cek apakah username ada

        if (
            count($credential) > 0
        ) {
            $credential = $credential[0];

            if ($data['username'] === $credential['username'] && $data['password'] === $credential['password']) {
                if ($credential['role'] === "admin") {
                    session()->set('login', true);
                    session()->set('role', $credential["role"]);

                    session()->setFlashdata('success', "Login berhasil!!!");
                    return redirect()->to(base_url("/admin/home"));
                }

                if ($credential['role'] === "user" || $credential['role'] === '') {
                    session()->set('login', true);
                    session()->set('role', $credential["role"]);
                    session()->set('id', $credential["id"]);

                    session()->setFlashdata('success', "Login berhasil!!!");
                    return redirect()->to(base_url("/user/home"));
                }
            }
        }
        session()->setFlashdata('gagal', "Username atau password salah");
        return redirect()->back();
    }

    // logout dari akun
    public function logout()
    {
        session()->destroy();

        return redirect()->to(base_url("/auth/login"));
    }
}
