<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengembalian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PengembalianID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'TanggalPengembalian' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('PengembalianID', true);
        $this->forge->createTable('pengembalian');
        
    }

    public function down()
    {
        $this->forge->dropTable('pengembalian');
    }
}
