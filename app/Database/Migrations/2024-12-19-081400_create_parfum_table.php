<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateParfumTable extends Migration
{
    public function up()
    {
        // Membuat tabel parfum
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('parfum');
    }

    public function down()
    {
        // Menghapus tabel parfum
        $this->forge->dropTable('parfum');
    }
}
