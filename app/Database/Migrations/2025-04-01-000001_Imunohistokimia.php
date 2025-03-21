<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Imunohistokimia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_imunohistokimia' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_imunohistokimia' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
                'unique'     => true,
            ],
            'id_pasien' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'unit_asal' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Dipilih',
                'null'       => true,
            ],
            'dokter_pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Dipilih',
                'null'       => true,
            ],
            'tanggal_permintaan' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'tanggal_hasil' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'lokasi_spesimen' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Diisi',
                'null'       => true,
            ],
            'tindakan_spesimen' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Dipilih',
                'null'       => true,
            ],
            'diagnosa_klinik' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Diisi',
                'null'       => true,
            ],
            'status_imunohistokimia' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Diproses',
                'null'       => true,
            ],
            'makroskopis_imunohistokimia' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'mikroskopis_imunohistokimia' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'jumlah_slide' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
                'default'    => 0,
            ],
            'hasil_imunohistokimia' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'print_imunohistokimia' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'penerima_imunohistokimia' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Belum Diambil',
                'null' => true,
            ],
            'tanggal_penerima' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Primary Key
        $this->forge->addKey('id_imunohistokimia', true);

        // Foreign Keys
        $this->forge->addForeignKey('id_pasien', 'patient', 'id_pasien', 'CASCADE', 'CASCADE');
        // Create Table
        $this->forge->createTable('imunohistokimia');
    }

    public function down()
    {
        $this->forge->dropTable('imunohistokimia');
    }
}
