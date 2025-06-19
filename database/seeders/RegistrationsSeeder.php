<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;

class RegistrationsSeeder extends Seeder
{
    public function run(): void {
        $registrations = [
            [
                'id_user' => 1,
                'id_course' => 1,
                'registration_date' => now(),
            ],
            [
                'id_user' => 2,
                'id_course' => 2,
                'registration_date' => now(),
            ],
            [
                'id_user' => 3,
                'id_course' => 3,
                'registration_date' => now(),
            ],
        ];

        foreach ($registrations as $registration) {
            Registration::create($registration);
        }
    }
}
