<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    public function run(): void
    {
        $comments = [
            [
                'comment_content' => 'Este artículo proporciona una excelente introducción a la computación cuántica y sus principios básicos.',
                'comment_date' => now(),
                'article_id' => 4,
                'user_id' => 5,

            ],
            [
                'comment_content' => 'La explicación sobre los qubits y la superposición es bastante clara, pero me gustaría ver más ejemplos prácticos.',
                'comment_date' => now(),
                'article_id' => 5,
                'user_id' => 3,
            ],
            [
                'comment_content' => 'El entrelazamiento cuántico es un fenómeno fascinante. Me gustó cómo se explicó en este artículo.',
                'comment_date' => now(),
                'article_id' => 6,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'Muy interesante cómo los algoritmos cuánticos pueden mejorar la eficiencia en comparación con los clásicos.',
                'comment_date' => now(),
                'article_id' => 7,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'Las puertas cuánticas son la clave para las operaciones cuánticas. Excelente descripción de su funcionamiento.',
                'comment_date' => now(),
                'article_id' => 8,
                'user_id' => 4,
            ],
            [
                'comment_content' => 'El tema de la corrección de errores cuánticos es crucial para la estabilidad de los sistemas cuánticos.',
                'comment_date' => now(),
                'article_id' => 9,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'La criptografía cuántica tiene un gran potencial. Este artículo explica bien los riesgos y las soluciones.',
                'comment_date' => now(),
                'article_id' => 10,
                'user_id' => 4,
            ],
            [
                'comment_content' => 'La simulación cuántica es impresionante. Es asombroso cómo se pueden simular materiales complejos.',
                'comment_date' => now(),
                'article_id' => 11,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'Me gustaría ver más detalles sobre cómo se implementa el quantum annealing en problemas reales.',
                'comment_date' => now(),
                'article_id' => 12,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'La IA y la computación cuántica pueden revolucionar muchas industrias. Gran artículo sobre este tema.',
                'comment_date' => now(),
                'article_id' => 13,
                'user_id' => 10,
            ],
            [
                'comment_content' => 'El hardware cuántico sigue siendo un reto, pero es emocionante ver los avances que se están logrando.',
                'comment_date' => now(),
                'article_id' => 14,
                'user_id' => 11,
            ],
            [
                'comment_content' => 'Las redes cuánticas traerán enormes cambios en las comunicaciones. Este artículo explica bien su futuro.',
                'comment_date' => now(),
                'article_id' => 15,
                'user_id' => 12,
            ],
            [
                'comment_content' => 'La computación cuántica aplicada a la medicina es una de las áreas más prometedoras. Bien explicado.',
                'comment_date' => now(),
                'article_id' => 16,
                'user_id' => 13,
            ],
            [
                'comment_content' => 'La optimización cuántica es muy relevante para la logística y la planificación de recursos. Me ha gustado el enfoque.',
                'comment_date' => now(),
                'article_id' => 17,
                'user_id' => 14,
            ],
            [
                'comment_content' => 'Interesante el uso de la computación cuántica para simular procesos biológicos, especialmente en la creación de medicamentos.',
                'comment_date' => now(),
                'article_id' => 18,
                'user_id' => 15,
            ],
            [
                'comment_content' => 'El artículo sobre mecánica cuántica y computación cuántica fue esclarecedor. Ayuda a entender cómo se conecta la teoría con la práctica.',
                'comment_date' => now(),
                'article_id' => 19,
                'user_id' => 16,
            ],
            [
                'comment_content' => 'La computación cuántica aplicada en las ciencias de materiales es una gran perspectiva. Interesante cómo se pueden diseñar nuevos materiales.',
                'comment_date' => now(),
                'article_id' => 20,
                'user_id' => 17,
            ],
            [
                'comment_content' => 'El impacto de la computación cuántica en la seguridad informática será disruptivo. Buena explicación sobre las implicaciones.',
                'comment_date' => now(),
                'article_id' => 21,
                'user_id' => 18,
            ],
            [
                'comment_content' => 'La computación cuántica tiene un futuro brillante en las comunicaciones, como se detalla en este artículo.',
                'comment_date' => now(),
                'article_id' => 22,
                'user_id' => 19,
            ],
            [
                'comment_content' => 'La simulación de partículas con computadoras cuánticas es increíble. El artículo cubre bien cómo esta tecnología puede ayudar a la física.',
                'comment_date' => now(),
                'article_id' => 23,
                'user_id' => 20,
            ],
            [
                'comment_content' => 'Las estrategias de corrección de errores cuánticos son fundamentales. Este artículo presenta buenas soluciones a los problemas.',
                'comment_date' => now(),
                'article_id' => 24,
                'user_id' => 21,
            ],
            [
                'comment_content' => 'Interesante cómo la computación cuántica ayuda en el análisis de grandes datos. Es un campo con mucho potencial.',
                'comment_date' => now(),
                'article_id' => 25,
                'user_id' => 22,
            ],
            [
                'comment_content' => 'Gran enfoque en cómo la computación cuántica optimiza los procesos de toma de decisiones automatizada.',
                'comment_date' => now(),
                'article_id' => 26,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'El uso de la computación cuántica en la industria automotriz es fascinante. Este artículo ofrece una visión clara de sus aplicaciones.',
                'comment_date' => now(),
                'article_id' => 27,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'Este artículo explica bien el impacto potencial de la computación cuántica en la economía global. Una perspectiva interesante.',
                'comment_date' => now(),
                'article_id' => 28,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'Me gustaría ver más ejemplos prácticos de computación cuántica aplicada en industrias específicas.',
                'comment_date' => now(),
                'article_id' => 29,
                'user_id' => 5,
            ],
            [
                'comment_content' => 'La computación cuántica en la medicina personalizada puede cambiar el futuro de la atención médica. Gran artículo.',
                'comment_date' => now(),
                'article_id' => 30,
                'user_id' => 5,
            ],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
