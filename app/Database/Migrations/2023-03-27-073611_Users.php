<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],

            //Login/Register
            'email' => ['type' => 'VARCHAR','constraint' => 64,],
            'password' => ['type' => 'VARCHAR', 'constraint' => 64,'null' => true,],
            'role' => ['type' => 'VARCHAR', 'constraint' => 64,'null' => true,],
            'is_active' => ['type' => 'VARCHAR', 'constraint' => 64,'null' => true,],

            // Timestamps
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
