<?php
namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table = 'patient'; // Nama tabel di database
    protected $primaryKey = 'id_pasien';
    protected $returnType = 'array'; // Data akan dikembalikan sebagai array asosiatif
    protected $allowedFields = [
        'norm_pasien',
        'nama_pasien',
        'alamat_pasien',
        'tanggal_lahir_pasien',
        'jenis_kelamin_pasien',
        'status_pasien'
    ];
}
