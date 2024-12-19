<?php
namespace App\Controllers;

use App\Models\PatientModel;

class Patient extends BaseController
{
    protected $PatientModel;

    public function __construct()
    {
        $this->PatientModel = new PatientModel();
    }

    public function index()
    {
        $data['title'] = 'Patient';
        return view('dashboard/patient', $data);
    }

    public function searchPatient()
    {
        $norm = $this->request->getPost('norm'); // Ambil data dari AJAX
        // Cari data pasien berdasarkan norm_pasien
        $patient = $this->PatientModel->where('norm_pasien', $norm)->first();
        // Jika data ditemukan, kembalikan JSON sukses
        if ($patient) {
            return $this->response->setJSON(['success' => true, 'data' => $patient]);
        }
        // Jika data tidak ditemukan, kembalikan JSON error
        return $this->response->setJSON(['success' => false, 'message' => 'Patient not found.']);
    }

    public function insert()
    {
        helper(['form', 'url']);  // Memanggil helper form dan url untuk mempermudah validasi dan URL
        $validation = \Config\Services::validation();  // Menyiapkan layanan validasi bawaan CodeIgniter
        $validation->setRules([
            'norm_pasien' => 'required|is_unique[patients.norm_pasien]', // norm harus unik
            'nama_pasien' => 'required', 
            'alamat_pasien' => 'permit_empty', 
            'tanggal_lahir_pasien' => 'permit_empty|valid_date', 
            'jenis_kelamin_pasien' => 'permit_empty|in_list[Laki-laki,Perempuan,Belum Dipilih]', 
            'status_pasien' => 'permit_empty|in_list[PBI,Non PBI,Umum,Belum Dipilih]' 
        ]);

        // Jika validasi gagal
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors()); // Kembali ke form dengan pesan error
        }

        // Ambil data dari input form
        $data = [
            'norm_pasien' => $this->request->getPost('norm_pasien'), // Nomor rekam medis
            'nama_pasien' => $this->request->getPost('nama_pasien'), // Nama pasien
            'alamat_pasien' => $this->request->getPost('alamat_pasien'), // Alamat pasien
            'tanggal_lahir_pasien' => $this->request->getPost('tanggal_lahir_pasien'), // Tanggal lahir pasien
            'jenis_kelamin_pasien' => $this->request->getPost('jenis_kelamin_pasien'), // Jenis kelamin pasien
            'status_pasien' => $this->request->getPost('status_pasien'), // Status pasien
        ];
        // Simpan data pasien ke database
        try {
                $this->PatientModel->insertPatient($data);  // Menyimpan data pengguna ke database
                // Mengecek apakah data berhasil disimpan
                if ($this->PatientModel->db->affectedRows() > 0) {
                    return redirect()->to('/dashboard')->with('success', 'Registrasi berhasil!');  // Jika berhasil, redirect ke halaman login dengan pesan sukses
                } else {
                    return redirect()->back()->with('error', 'Terjadi kesalahan saat mendaftar.');  // Jika gagal, tampilkan pesan error
                }
            } catch (\Exception $e) {
                // Menangani kesalahan jika terjadi error saat proses insert
                return redirect()->back()->with('error', 'Terjadi kesalahan internal: ' . $e->getMessage());  // Pesan error jika ada exception
            }
    }
}
