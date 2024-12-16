<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'users';
    // Primary Key yang digunakan
    protected $primaryKey = 'id_user';
    // Kolom yang boleh diisi
    protected $allowedFields = ['username', 'password_user', 'nama_user', 'status_user'];
    // Return type data yang dikembalikan (array)
    protected $returnType = 'array';
    // Menyimpan data pengguna baru
    public function insertUser($data)
    {
        // Pastikan data disimpan dengan benar
        try {
            // Proses penyimpanan data menggunakan insert
            $this->insert($data);

            // Cek apakah ada error saat penyimpanan
            if ($this->db->affectedRows() > 0) {
                return true; // Berhasil menyimpan data
            } else {
                return false; // Gagal menyimpan data
            }
        } catch (\Exception $e) {
            // Menangani error dan mengembalikan pesan error
            return $e->getMessage();
        }
    }
    // Mengecek apakah username sudah ada di database
    public function checkUsernameExists($username)
    {
        return $this->where('username', $username)->first(); // Cek apakah username sudah ada di database
    }
}
