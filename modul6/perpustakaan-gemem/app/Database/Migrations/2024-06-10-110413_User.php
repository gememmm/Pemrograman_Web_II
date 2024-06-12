<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
                'unique' => TRUE,
            ],
            'password' => [
                'type' => 'TEXT',
                'constraint' => 100,
                'null' => FALSE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
