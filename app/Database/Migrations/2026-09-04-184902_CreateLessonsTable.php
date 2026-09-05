<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLessonsTable extends Migration
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
            'course_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'lesson_order' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 1,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('lessons');
    }

    public function down()
    {
        $this->forge->dropTable('lessons');
    }
}