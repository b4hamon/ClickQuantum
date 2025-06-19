<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Computación Cuántica Básica'],
            ['category_name' => 'Qubits y Superposición'],
            ['category_name' => 'Entrelazamiento Cuántico'],
            ['category_name' => 'Algoritmos Cuánticos'],
            ['category_name' => 'Puertas Cuánticas'],
            ['category_name' => 'Corrección de Errores Cuánticos'],
            ['category_name' => 'Criptografía Cuántica'],
            ['category_name' => 'Simulación Cuántica'],
            ['category_name' => 'Quantum Annealing'],
            ['category_name' => 'Computación Cuántica en Inteligencia Artificial'],
            ['category_name' => 'Hardware para Computación Cuántica'],
            ['category_name' => 'Redes Cuánticas'],
            ['category_name' => 'Computación Cuántica en la Medicina'],
            ['category_name' => 'Optimización Cuántica'],
            ['category_name' => 'Computación Cuántica en Biología'],
            ['category_name' => 'Mecánica Cuántica y Computación'],
            ['category_name' => 'Computación Cuántica y Ciencias de Materiales'],
            ['category_name' => 'Impacto de la Computación Cuántica en la Seguridad Informática'],
            ['category_name' => 'Computación Cuántica y el Futuro de las Comunicaciones'],
            ['category_name' => 'Simulaciones Cuánticas en Física de Partículas'],
            ['category_name' => 'Estrategias de Corrección de Errores Cuánticos'],
            ['category_name' => 'Aplicaciones de la Computación Cuántica en Finanzas'],
            ['category_name' => 'Computación Cuántica en Robótica'],
            ['category_name' => 'Desarrollo de Algoritmos Cuánticos de Optimización'],
            ['category_name' => 'La Computación Cuántica en la Industria Automotriz'],
            ['category_name' => 'La Computación Cuántica en la Agricultura'],
            ['category_name' => 'Computación Cuántica y Big Data'],
            ['category_name' => 'Computación Cuántica y su Impacto en la Economía Global'],
            ['category_name' => 'Avances en Tecnología de Qubits'],
            ['category_name' => 'Computación Cuántica y la Ciencia de los Materiales'],
            ['category_name' => 'Computación Cuántica en la Física Teórica'],
        ];
        

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
