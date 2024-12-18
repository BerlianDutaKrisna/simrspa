<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
                'constraint' => ['admin', 'analis', 'dokter'],  // Status bisa 'admin', 'analis', atau 'dokter'
                'default' => 'admin',  // Default adalah 'admin'
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
