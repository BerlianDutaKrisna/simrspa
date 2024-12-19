<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); // Mengambil semua data dari tabel 'users'
        // Mengambil id_user dan nama_user dari session
        $data['id_user'] = session()->get('id_user');
        $data['nama_user'] = session()->get('nama_user');
        // Mengirim data ke view untuk ditampilkan
        return view('users/users', $data);
    }
}
