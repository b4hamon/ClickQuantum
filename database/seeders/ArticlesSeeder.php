<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Introducción a la computación cuántica',
                'content' => 'La computación cuántica es un campo emergente que aprovecha los principios de la mecánica cuántica para realizar operaciones de procesamiento de información de manera más eficiente que los métodos clásicos.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 1,
            ],
            [
                'title' => 'Qubits y superposición cuántica',
                'content' => 'Los qubits son la unidad fundamental de la computación cuántica. A diferencia de los bits clásicos, los qubits pueden estar en múltiples estados al mismo tiempo gracias al fenómeno de la superposición.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 2,
            ],
            [
                'title' => 'El entrelazamiento cuántico y sus aplicaciones',
                'content' => 'El entrelazamiento cuántico es un fenómeno en el que los estados cuánticos de dos o más objetos se encuentran correlacionados de tal manera que el estado de uno depende del estado del otro, incluso a distancias grandes.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 3,
            ],
            [
                'title' => 'Algoritmos cuánticos: Shor y Grover',
                'content' => 'Los algoritmos cuánticos, como los de Shor y Grover, ofrecen mejoras significativas sobre sus contrapartes clásicas en problemas de factorización y búsqueda en bases de datos no ordenadas.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 4,
            ],
            [
                'title' => 'Computadoras cuánticas: cómo funcionan',
                'content' => 'Las computadoras cuánticas utilizan qubits que pueden estar en superposición de varios estados, lo que les permite realizar cálculos en paralelo y resolver problemas complejos mucho más rápido que las computadoras tradicionales.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 5,
            ],
            [
                'title' => 'Puertas cuánticas y sus operaciones',
                'content' => 'Las puertas cuánticas son operaciones que afectan el estado de los qubits en un circuito cuántico. Estas operaciones son fundamentales para la manipulación de la información cuántica.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 6,
            ],
            [
                'title' => 'El desafío de la corrección de errores cuánticos',
                'content' => 'Uno de los mayores desafíos en la computación cuántica es la corrección de errores, ya que los qubits son extremadamente susceptibles a la interferencia de su entorno. Se están desarrollando técnicas para mitigar estos errores y garantizar la fiabilidad de los cálculos.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 7,
            ],
            [
                'title' => 'La computación cuántica en la criptografía',
                'content' => 'La computación cuántica tiene el potencial de romper los sistemas criptográficos actuales, como RSA, que se basan en la dificultad de factorización de números grandes. Sin embargo, también está impulsando la investigación en criptografía cuántica, que promete ser mucho más segura.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 8,
            ],
            [
                'title' => 'Computación cuántica para la simulación de materiales',
                'content' => 'Las computadoras cuánticas podrían revolucionar la simulación de materiales y reacciones químicas, permitiendo el diseño de nuevos materiales y fármacos con una precisión mucho mayor que los métodos tradicionales.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 9,
            ],
            [
                'title' => 'Quantum Annealing: un enfoque diferente',
                'content' => 'El quantum annealing es una técnica de computación cuántica que busca resolver problemas de optimización mediante la exploración de soluciones en el espacio de búsqueda. D-Wave es una de las empresas que utiliza esta técnica para resolver problemas prácticos.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 10,
            ],
            [
                'title' => 'Computación cuántica y la inteligencia artificial',
                'content' => 'La computación cuántica puede acelerar los algoritmos de inteligencia artificial, ayudando a entrenar modelos más complejos y grandes, y potencialmente llevar la IA a nuevas fronteras.',
                'published_at' => '2025-01-20 00:00:00',
                'user_id' => 11,
            ],
            [
                'title' => 'El futuro de la computación cuántica',
                'content' => 'Aunque aún estamos en las primeras etapas de la computación cuántica, las investigaciones continúan a buen ritmo. Se espera que en las próximas décadas las computadoras cuánticas sean capaces de resolver problemas que hoy en día parecen imposibles.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 12,
            ],
            [
                'title' => 'El papel de los algoritmos cuánticos en la simulación de física',
                'content' => 'Los algoritmos cuánticos tienen un gran potencial en la simulación de fenómenos físicos complejos, lo que podría ayudar a los científicos a comprender mejor el comportamiento de partículas subatómicas y otros fenómenos en la física de altas energías.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 13,
            ],
            [
                'title' => 'Computación cuántica y su impacto en la seguridad informática',
                'content' => 'La llegada de las computadoras cuánticas puede hacer obsoletas muchas de las técnicas de seguridad informática actuales. Sin embargo, también puede dar paso a nuevos métodos de seguridad basados en la criptografía cuántica.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 14,
            ],
            [
                'title' => 'Cómo la computación cuántica está transformando la industria',
                'content' => 'Desde la inteligencia artificial hasta la investigación farmacéutica, la computación cuántica está comenzando a impactar diversas industrias. Las empresas están invirtiendo grandes sumas en esta tecnología para mantenerse a la vanguardia.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 15,
            ],
            [
                'title' => 'La computación cuántica en la resolución de problemas complejos',
                'content' => 'La capacidad de las computadoras cuánticas para realizar múltiples cálculos simultáneamente les permite abordar problemas complejos de una manera mucho más eficiente que las computadoras tradicionales.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 16,
            ],
            [
                'title' => 'Redes cuánticas: el futuro de las comunicaciones',
                'content' => 'Las redes cuánticas permitirán una comunicación más rápida y segura que las redes actuales, utilizando las propiedades cuánticas como la superposición y el entrelazamiento para transmitir información.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 17,
            ],
            [
                'title' => 'El papel de la mecánica cuántica en la computación',
                'content' => 'La mecánica cuántica proporciona la base teórica para la computación cuántica. Fenómenos como el principio de incertidumbre y la superposición permiten que los algoritmos cuánticos sean más poderosos que los clásicos.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 18,
            ],
            [
                'title' => 'La computación cuántica en el análisis de datos',
                'content' => 'La computación cuántica podría acelerar el procesamiento de grandes volúmenes de datos, lo que sería útil en áreas como la minería de datos, el análisis de patrones y la toma de decisiones automatizada.',
                'published_at' => '2025-02-14 00:00:00',
                'user_id' => 19,
            ],
            [
                'title' => 'La computación cuántica en la simulación biológica',
                'content' => 'Las simulaciones biológicas cuánticas podrían ayudar a avanzar en la medicina personalizada, permitiendo la simulación precisa de procesos biológicos y la identificación de nuevas terapias.',
                'published_at' => now(),
                'user_id' => 20,
            ],
            [
                'title' => 'Desarrollo de hardware para computación cuántica',
                'content' => 'El desarrollo de hardware para computación cuántica es un desafío, debido a la necesidad de mantener los qubits estables y funcionales. Se están explorando diferentes enfoques, como los circuitos superconductores y los trampas de iones.',
                'published_at' => now(),
                'user_id' => 21,
            ],
            [
                'title' => 'El uso de computadoras cuánticas para resolver problemas de optimización',
                'content' => 'La computación cuántica puede ser útil para resolver problemas de optimización complejos en campos como la logística, la programación y la planificación de rutas.',
                'published_at' => now(),
                'user_id' => 22,
            ],
            [
                'title' => 'La computación cuántica y el futuro de la inteligencia colectiva',
                'content' => 'La computación cuántica podría transformar la forma en que las máquinas colaboran, mejorando el análisis y la toma de decisiones a través de sistemas más inteligentes y colaborativos.',
                'published_at' => now(),
                'user_id' => 23,
            ],
            [
                'title' => 'La computación cuántica en la industria automotriz',
                'content' => 'Las aplicaciones de la computación cuántica en la industria automotriz incluyen el diseño de materiales para baterías y la optimización de rutas para vehículos autónomos.',
                'published_at' => now(),
                'user_id' => 24,
            ],
            [
                'title' => 'El impacto de la computación cuántica en la economía global',
                'content' => 'La computación cuántica tiene el potencial de transformar sectores enteros de la economía global, desde la investigación científica hasta la automatización industrial.',
                'published_at' => now(),
                'user_id' => 25,
            ],
            [
                'title' => 'Desafíos actuales en la implementación de computación cuántica',
                'content' => 'A pesar de sus promesas, la computación cuántica enfrenta desafíos importantes, como la estabilidad de los qubits y la corrección de errores cuánticos. Sin embargo, los avances continúan.',
                'published_at' => now(),
                'user_id' => 26,
            ],
            [
                'title' => 'Computación cuántica y sus aplicaciones en la medicina',
                'content' => 'Las computadoras cuánticas pueden ser utilizadas para la simulación de moléculas y la creación de nuevos fármacos, ofreciendo nuevas posibilidades en el campo de la medicina.',
                'published_at' => now(),
                'user_id' => 27,
            ],
            [
                'title' => 'Computación cuántica y la predicción de patrones',
                'content' => 'La computación cuántica tiene un gran potencial para mejorar la predicción de patrones en grandes volúmenes de datos, lo que podría beneficiar áreas como las finanzas, la meteorología y el análisis de comportamiento.',
                'published_at' => now(),
                'user_id' => 28,
            ],
            [
                'title' => 'La computación cuántica en la investigación espacial',
                'content' => 'La computación cuántica podría ser utilizada para simular complejas interacciones en el espacio, ayudando en la investigación de fenómenos astronómicos y mejorando la eficiencia de los cálculos en misiones espaciales.',
                'published_at' => now(),
                'user_id' => 29,
            ],
            [
                'title' => 'La computación cuántica y el análisis de imágenes médicas',
                'content' => 'Las computadoras cuánticas pueden acelerar el procesamiento y análisis de imágenes médicas, mejorando el diagnóstico y permitiendo la detección temprana de enfermedades mediante el uso de algoritmos avanzados.',
                'published_at' => now(),
                'user_id' => 30,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}