<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    public function run(): void {
        $courses = [
            [
                'course_duration' => 3, 'course_name' => 'Curso de Laravel', 'course_description' => 'Aprende a desarrollar aplicaciones con Laravel.',
            ],
            [
                'course_duration' => 2, 'course_name' => 'Curso de PHP', 'course_description' => 'Fundamentos esenciales de PHP para desarrollo web.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Curso de MySQL', 'course_description' => 'Gestión de bases de datos con MySQL.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Introducción a la Computación Cuántica', 'course_description' => 'Conceptos básicos y fundamentos de la computación cuántica.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Algoritmos Cuánticos', 'course_description' => 'Estudio de algoritmos cuánticos como Shor y Grover.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Circuitos Cuánticos', 'course_description' => 'Diseño y simulación de circuitos cuánticos.',
            ],
            [
                'course_duration' => 5, 'course_name' => 'Qiskit y Programación Cuántica', 'course_description' => 'Uso de Qiskit para programar en computadoras cuánticas de IBM.',
            ],
            [
                'course_duration' => 2, 'course_name' => 'Fundamentos de la Mecánica Cuántica', 'course_description' => 'Principios básicos de la mecánica cuántica aplicada a la computación.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Cálculo Cuántico', 'course_description' => 'Matemáticas fundamentales en la computación cuántica.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Computación Cuántica en la Nube', 'course_description' => 'Ejecutando algoritmos cuánticos en plataformas cloud.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Simuladores Cuánticos', 'course_description' => 'Uso de herramientas de simulación cuántica.',
            ],
            [
                'course_duration' => 5, 'course_name' => 'Teoría de la Información Cuántica', 'course_description' => 'Conceptos de información cuántica y entropía.',
            ],
            [
                'course_duration' => 2, 'course_name' => 'Corrección de Errores Cuánticos', 'course_description' => 'Métodos para la corrección de errores en qubits.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Criptografía Cuántica', 'course_description' => 'Seguridad y protocolos cuánticos como BB84.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Redes Cuánticas', 'course_description' => 'Estudio de la comunicación cuántica y teleportación.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Modelos de Computación Cuántica', 'course_description' => 'Diferentes modelos de computación como adiabática y topológica.',
            ],
            [
                'course_duration' => 2, 'course_name' => 'Estados y Operadores Cuánticos', 'course_description' => 'Estados de qubits y operadores matemáticos usados.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Interferometría Cuántica', 'course_description' => 'Principios de interferencia cuántica aplicada.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Simulación de Sistemas Cuánticos', 'course_description' => 'Modelado de sistemas físicos cuánticos.',
            ],
            [
                'course_duration' => 5, 'course_name' => 'Machine Learning Cuántico', 'course_description' => 'Uso de algoritmos cuánticos en aprendizaje automático.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Hardware Cuántico', 'course_description' => 'Exploración de tecnologías de hardware para computadoras cuánticas.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Programación en Cirq', 'course_description' => 'Uso de la biblioteca Cirq para programar computadoras cuánticas.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Ventajas Cuánticas', 'course_description' => 'Casos de uso donde la computación cuántica supera a la clásica.',
            ],
            [
                'course_duration' => 2, 'course_name' => 'Postulados de la Mecánica Cuántica', 'course_description' => 'Explicación detallada de los postulados cuánticos.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Estados Entretejidos y Entrelazamiento', 'course_description' => 'Análisis de la correlación cuántica.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Física de Qubits', 'course_description' => 'Implementaciones físicas de qubits como superconductores e iones atrapados.',
            ],
            [
                'course_duration' => 5, 'course_name' => 'Optimización Cuántica', 'course_description' => 'Solución de problemas de optimización con algoritmos cuánticos.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Lógica Cuántica', 'course_description' => 'Estudio de puertas lógicas cuánticas y su funcionalidad.',
            ],
            [
                'course_duration' => 4, 'course_name' => 'Combinatoria Cuántica', 'course_description' => 'Análisis de combinatoria en sistemas cuánticos.',
            ],
            [
                'course_duration' => 3, 'course_name' => 'Sensores Cuánticos', 'course_description' => 'Aplicaciones de sensores cuánticos en diversas áreas.',
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
