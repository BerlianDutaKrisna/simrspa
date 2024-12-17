<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Mengecek apakah session 'nama_user' ada
        if (!session()->has('nama_user')) {
            // Jika tidak ada session 'nama_user', artinya user belum login, redirect ke login
            return redirect()->to('/login');
        }

        // Mengambil data dari session
        $id_user = session()->get('id_user');
        $nama_user = session()->get('nama_user');

        // Mengirim data ke view untuk ditampilkan
        return view('dashboard', [
            'id_user' => $id_user,
            'nama_user' => $nama_user
        ]);
    }
}
