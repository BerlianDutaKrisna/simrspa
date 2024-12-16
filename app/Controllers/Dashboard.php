<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    // Fungsi untuk menampilkan dashboard
    public function index()
    {
        // Mengecek apakah session nama_user ada
        if (!session()->has('nama_user')) {
            // Jika tidak ada session 'nama_user', artinya user belum login, redirect ke login
            return redirect()->to('/login');
        }
        // Mengambil nama_user dari session
        $nama_user = session()->get('nama_user');
        // Mengirim data nama_user ke view untuk ditampilkan
        return view('dashboard', ['nama_user' => $nama_user]);
    }
}
