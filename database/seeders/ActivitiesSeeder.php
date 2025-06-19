<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitiesSeeder extends Seeder {
    public function run(): void {
        $activities = [
            [
                'activity_description' => 'Primer proyecto con Laravel', 'activity_date_limit' => now()->addDays(10), 'id_course' => 1, // Referencia al curso de Laravel
            ],
            [
                'activity_description' => 'Ejercicios con PHP', 'activity_date_limit' => now()->addDays(15), 'id_course' => 2, // Referencia al curso de PHP
            ],
            [
                'activity_description' => 'Modelado de bases de datos', 'activity_date_limit' => now()->addDays(20), 'id_course' => 3, // Referencia al curso de MySQL
            ],
            [
                'activity_description' => 'Introducción práctica a la computación cuántica', 'activity_date_limit' => now()->addDays(10), 'id_course' => 4,
            ],
            [
                'activity_description' => 'Implementación de algoritmos cuánticos básicos', 'activity_date_limit' => now()->addDays(12), 'id_course' => 5,
            ],
            [
                'activity_description' => 'Construcción de circuitos cuánticos simples', 'activity_date_limit' => now()->addDays(14), 'id_course' => 6,
            ],
            [
                'activity_description' => 'Primeros pasos con Qiskit', 'activity_date_limit' => now()->addDays(16), 'id_course' => 7,
            ],
            [
                'activity_description' => 'Ejercicios de mecánica cuántica aplicada', 'activity_date_limit' => now()->addDays(18), 'id_course' => 8,
            ],
            [
                'activity_description' => 'Resolución de problemas con cálculo cuántico', 'activity_date_limit' => now()->addDays(20), 'id_course' => 9,
            ],
            [
                'activity_description' => 'Ejecutar algoritmos en la nube cuántica', 'activity_date_limit' => now()->addDays(22), 'id_course' => 10,
            ],
            [
                'activity_description' => 'Simulación de qubits en entornos virtuales', 'activity_date_limit' => now()->addDays(24), 'id_course' => 11,
            ],
            [
                'activity_description' => 'Aplicaciones de la teoría de la información cuántica', 'activity_date_limit' => now()->addDays(26), 'id_course' => 12,
            ],
            [
                'activity_description' => 'Corrección de errores en qubits', 'activity_date_limit' => now()->addDays(28), 'id_course' => 13,
            ],
            [
                'activity_description' => 'Implementación de protocolos de criptografía cuántica', 'activity_date_limit' => now()->addDays(30), 'id_course' => 14,
            ],
            [
                'activity_description' => 'Prácticas en redes cuánticas', 'activity_date_limit' => now()->addDays(32), 'id_course' => 15,
            ],
            [
                'activity_description' => 'Simulación de modelos de computación cuántica', 'activity_date_limit' => now()->addDays(34), 'id_course' => 16,
            ],
            [
                'activity_description' => 'Análisis de estados y operadores cuánticos', 'activity_date_limit' => now()->addDays(36), 'id_course' => 17,
            ],
            [
                'activity_description' => 'Experimentos con interferometría cuántica', 'activity_date_limit' => now()->addDays(38), 'id_course' => 18,
            ],
            [
                'activity_description' => 'Simulación de sistemas físicos cuánticos', 'activity_date_limit' => now()->addDays(40), 'id_course' => 19,
            ],
            [
                'activity_description' => 'Implementación de machine learning cuántico', 'activity_date_limit' => now()->addDays(42), 'id_course' => 20,
            ],
            [
                'activity_description' => 'Exploración de hardware cuántico', 'activity_date_limit' => now()->addDays(44), 'id_course' => 21,
            ],
            [
                'activity_description' => 'Ejercicios con la biblioteca Cirq', 'activity_date_limit' => now()->addDays(46), 'id_course' => 22,
            ],
            [
                'activity_description' => 'Casos de uso de ventajas cuánticas', 'activity_date_limit' => now()->addDays(48), 'id_course' => 23,
            ],
            [
                'activity_description' => 'Análisis de postulados de la mecánica cuántica', 'activity_date_limit' => now()->addDays(50), 'id_course' => 24,
            ],
            [
                'activity_description' => 'Estudio del entrelazamiento cuántico', 'activity_date_limit' => now()->addDays(52), 'id_course' => 25,
            ],
            [
                'activity_description' => 'Construcción de modelos físicos de qubits', 'activity_date_limit' => now()->addDays(54), 'id_course' => 26,
            ],
            [
                'activity_description' => 'Ejercicios de optimización cuántica', 'activity_date_limit' => now()->addDays(56), 'id_course' => 27,
            ],
            [
                'activity_description' => 'Simulación de puertas lógicas cuánticas', 'activity_date_limit' => now()->addDays(58), 'id_course' => 28,
            ],
            [
                'activity_description' => 'Ejercicios de combinatoria en computación cuántica', 'activity_date_limit' => now()->addDays(60), 'id_course' => 29,
            ],
            [
                'activity_description' => 'Aplicaciones de sensores cuánticos', 'activity_date_limit' => now()->addDays(62), 'id_course' => 30,
            ]
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}