<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
			'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'body' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
		$this->forge->addKey('slug', false, true);
        $this->forge->createTable('news');
	}

	public function down()
	{
		$this->forge->dropTable('news');
	}
}
