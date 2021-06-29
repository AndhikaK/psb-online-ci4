<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminControllers extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // Deskripsi        : me return view admin-home
    // Author           : Andhika Kurniawan
    // initial state    : 
    // final state      : 
    public function index()
    {
        // prevent access if not login
        if (!session()->get('login')) {
            session()->setFlashdata('gagal', "Anda belum login");
            return redirect()->to("/auth/login");
        }

        $data = [
            'title' => 'Home',
            'data' => $this->userModel->where("role != 'admin'")->findAll(),
        ];

        return view('admin/index', $data);
    }

    // Deskripsi        : me return view admin-detail
    // Author           : Andhika Kurniawan
    // initial state    : 
    // final state      : 
    public function detail($id)
    {
        if (!session()->get('login')) {
            session()->setFlashdata('gagal', "Anda belum login");
            return redirect()->to("/auth/login");
        }

        $data = [
            'title' => "Detail Calon Siswa",
            'data' => $this->userModel->find($id),
        ];

        return view('admin/detail', $data);
    }

    // Deskripsi        : update data calon siswa
    // Author           : Andhika Kurniawan
    // initial state    : data semula
    // final state      : data terupdate
    public function updateData()
    {
        // get data dari form pendaftaran
        $data = $this->request->getVar();
        $id = $data['id'];

        try {
            $this->userModel->update($id, $data);
            session()->setFlashdata('success', "Update data pendaftaran berhasil");
        } catch (\Exception $e) {

            session()->setFlashdata('gagal', $e);
        }


        return redirect()->to(base_url('/admin/home'));
    }

    // Deskripsi        : Menghapus entry siswa berdasarkan id
    // Author           : Andhika Kurniawan
    // initial state    : entry awal
    // final state      : entry terhapus
    public function delete($id)
    {
        try {
            $this->userModel->delete($id);
            session()->setFlashdata('success', "Entry berhasil dihapus!");
        } catch (\Exception $e) {

            session()->setFlashdata('gagal', $e);
        }

        return redirect()->to(base_url("/admin/home"));
    }
}
