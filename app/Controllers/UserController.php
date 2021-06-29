<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // return view home user
    public function index()
    {


        // prevent access if not login
        if (session()->get('id') == "") {
            session()->setFlashdata('gagal', "Anda belum login");
            return redirect()->to("/auth/login");
        }

        // get id from session
        $id = session()->get('id');

        $data = [
            'title' => 'Home',
            'data' => $this->userModel->find($id),
        ];

        return view('user/index', $data);
    }

    // return view pendaftaran user
    public function pendaftaran()
    {
        if (!session()->get('login')) {
            session()->setFlashdata('gagal', "Anda belum login");
            return redirect()->to("/auth/login");
        }

        // get id from session
        $id = session()->get('id');

        $data = [
            'title' => 'Pendaftaran',
            'data' => $this->userModel->find($id),
        ];

        return view('user/pendaftaran', $data);
    }

    // fungsi untuk insert data form ke database
    public function daftarSekolah()
    {
        // get data dari form pendaftaran
        $data = $this->request->getVar();


        $id = $data['id'];


        $foto = $this->request->getFile('foto');
        $randomName = $foto->getRandomName();
        $foto->move('foto', $randomName);

        try {
            $this->userModel->update($id, $data);
            $this->userModel->update($id, ['foto' => $randomName]);
            session()->setFlashdata('success', "Update data pendaftaran berhasil");
        } catch (\Exception $e) {

            session()->setFlashdata('gagal', $e);
        }


        return redirect()->to(base_url('/user/pendaftaran'));
    }
}
