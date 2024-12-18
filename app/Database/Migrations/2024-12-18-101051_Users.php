<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Menambahkan field untuk tabel users
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,  // Menjadikan ini auto increment
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,  // Menambahkan constraint unique untuk username
            ],
            'password_user' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_user' => [
                'type' => 'ENUM',
                'constraint' => ['Admin', 'Analis', 'Dokter', 'Belum Dipilih'],  // Status bisa 'admin', 'analis', atau 'dokter'
                'default' => 'Belum Dipilih',  // Default adalah 'Belum Dipilih'
            ],
        ]);
        
        // Menambahkan primary key pada 'id_user'
        $this->forge->addKey('id_user', true);

        // Membuat tabel users
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Menghapus tabel jika rollback
        $this->forge->dropTable('users');
    }
}
