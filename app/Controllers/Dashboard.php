<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Mengambil id_user dan nama_user dari session
        $data['id_user'] = session()->get('id_user');
        $data['nama_user'] = session()->get('nama_user');
        // Mengirim data ke view untuk ditampilkan
        return view('dashboard/dashboard', $data);
    }
}
