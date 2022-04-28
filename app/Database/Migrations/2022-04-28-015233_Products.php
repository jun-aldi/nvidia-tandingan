<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true, 
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'series' => [
                'type' => 'ENUM',
                'constraint' => "'RTX 30','RTX 30 Laptop','RTX 20','RTX 20 Laptop','GTX 16'"
            ],
            'architecture' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'cuda' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'boost_clock' => [
                'type' => 'FLOAT',
                'constraint' => '11'
            ],
            'base_clock' => [
                'type' => 'FLOAT',
                'constraint' => '11'
            ],
            'memory_size' => [
                'type' => 'INT',
                'constraint' => '5'
            ],
            'memory_bandwith' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'length' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'width' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'slot' => [
                'type' => 'INT',
                'constraint' => '5'
            ],
            'power' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
            
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
