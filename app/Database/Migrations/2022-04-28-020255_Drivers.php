<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Drivers extends Migration
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
            'product_type' => [
                'type' => 'ENUM',
                'constraint' => "'TITAN','GeForce','Legacy','3D vision' , 'ION'"
            ],
            'product_series' => [
                'type' => 'ENUM',
                'constraint' => "'RTX 30','RTX 30 laptop','RTX 20','RTX 20 laptop','GTX 16','GXT 10','GXT 10 laptop','GTX 900','GTX 900 laptop', 'MX','TITAN','QUADRO 2 pro','3D Vision','ION desktop','ION laptop'"
            ],
            'os' => [
                'type' => 'ENUM',
                'constraint' => "'Windows 11 64-bit','Windows 10 64-bit','Windows 10 32-bit','Windows 8.1 64-bit','Windows 8.1 32-bit','Windows 8 64-bit','Windows 8 32-bit','Windows 7 64-bit','Windows 7 32-bit', 'Linux 64-bit','Linux 32-bit'"
            ],
            'language' => [
                'type' => 'ENUM',
                'constraint' => "'enghlish (UK)','enghlish (US)','japanese','deutsch','korean'"
            ],
            'download_type' => [
                'type' => 'ENUM',
                'constraint' => "'game ready','studio'"
            ],
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
            
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('drivers');
    }

    public function down()
    {
        $this->forge->dropTable('drivers');
    }
}
