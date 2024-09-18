<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PeminjamanID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'UserID' => [
                'type' => 'INT',
                'null' => false
            ],
            'BukuID' => [
                'type' => 'INT',
                'null' => false
            ],
            'TanggalPeminjaman' => [
                'type' => 'DATE',
                'null' => false
            ],
            'TanggalPengembalian' => [
                'type' => 'DATE',
                'null' => true
            ],
            'StatusPeminjaman' => [
                'type' => 'ENUM',
                'constraint' => ['Dipinjam', 'Dikembalikan'],
                'default' => 'Dipinjam'
            ],
        ]);

        $this->forge->addKey('PeminjamanID', true);
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}
