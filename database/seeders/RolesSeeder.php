<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['description' => 'Docencte encargado',
                'label' => 'profesor',
                'name' => 'Profesor'],
            ['description' => 'Estudiante de colegio',
                'label' => 'alumno',
                'name' => 'Alumno'],
            ['description' => 'Administrador del sistema',
                'label' => 'administrador',
                'name' => 'Administrador'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
