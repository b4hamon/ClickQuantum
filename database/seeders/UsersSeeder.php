<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Daniel',
                'email' => 'usuario1@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 3,
            ],
            [
                'name' => 'Esteban',
                'email' => 'Esteban@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Laura',
                'email' => 'Laura@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Deniean',
                'email' => 'denian30@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 3,
            ],
            [
                'name' => 'Carlos',
                'email' => 'carlos@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Ana',
                'email' => 'ana@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Miguel',
                'email' => 'miguel@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Sofia',
                'email' => 'sofia@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Javier',
                'email' => 'javier@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Elena',
                'email' => 'elena@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Pedro',
                'email' => 'pedro@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Roberto',
                'email' => 'roberto@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Carmen',
                'email' => 'carmen@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Luis',
                'email' => 'luis@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Francisco',
                'email' => 'francisco@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Pedro',
                'email' => 'pedro2@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Raul',
                'email' => 'raul@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Julian',
                'email' => 'julian@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Silvia',
                'email' => 'silvia@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Laura',
                'email' => 'laura2@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Rocio',
                'email' => 'rocio@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Victor',
                'email' => 'victor@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Patricia',
                'email' => 'patricia@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Alicia',
                'email' => 'alicia@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Pablo',
                'email' => 'pablo@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Ana',
                'email' => 'ana2@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 1,
            ],
            [
                'name' => 'Eva',
                'email' => 'eva@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Antonio',
                'email' => 'antonio@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
            [
                'name' => 'Elisabeth',
                'email' => 'elisabeth@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'id_role' => 2,
            ],
        ];
        

        foreach ($users as $user) {
            User::create($user);
        }
    }
}