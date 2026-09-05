<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
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
            'course_code' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'instructor_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('course_code');
        $this->forge->addForeignKey('instructor_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('courses');
    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}