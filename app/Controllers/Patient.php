<?php
namespace App\Controllers;

use App\Models\PatientModel;

class Patient extends BaseController
{
    protected $patientModel;

    public function __construct()
    {
        $this->patientModel = new PatientModel();
    }

    public function searchPatient()
    {
        $norm = $this->request->getPost('norm'); // Ambil data dari AJAX

        // Cari data pasien berdasarkan norm_pasien
        $patient = $this->patientModel->where('norm_pasien', $norm)->first();

        // Jika data ditemukan, kembalikan JSON sukses
        if ($patient) {
            return $this->response->setJSON(['success' => true, 'data' => $patient]);
        }

        // Jika data tidak ditemukan, kembalikan JSON error
        return $this->response->setJSON(['success' => false, 'message' => 'Patient not found.']);
    }
}
