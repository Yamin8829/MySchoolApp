<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLoginUsers extends Migration
{
    public function up()
    {
        //
        $fields = [
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'user_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
            'last_login' => ['type' => 'int', 'constraint' => 225, 'default' => 0],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey(['user_id']);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('login_users', true);
    }

    public function down()
    {
        //
        // drop constraints first to prevent errors
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            $this->forge->dropForeignKey('login_users', 'login_users_user_id_foreign');
        }

        $this->forge->dropTable('login_users', true);
    }
}
