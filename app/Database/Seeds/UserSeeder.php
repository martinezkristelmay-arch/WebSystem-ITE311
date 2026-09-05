<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Admin User',
                'email' => 'admin@lms.com',
                'role' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'Sir Bas',
                'email' => 'sirbasr@lms.com',
                'role' => 'instructor',
                'password' => password_hash('instructor123', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'Kristel Mae Martinez',
                'email' => 'kristelmartinez@lms.com',
                'role' => 'student',
                'password' => password_hash('student123', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}