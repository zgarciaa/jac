<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answerOptions = [
            [
                'question_id' => 1,
                'value' => 'SISBEN.',
                'letter' => 'A'
            ],
            [
                'question_id' => 1,
                'value' => 'EPS.',
                'letter' => 'B'
            ],
            [
                'question_id' => 1,
                'value' => 'Prepagada.',
                'letter' => 'C'
            ],
            [
                'question_id' => 1,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'D'
            ],
            [
                'question_id' => 2,
                'value' => 'Pariente o Amigo.',
                'letter' => 'A'
            ],
            [
                'question_id' => 2,
                'value' => 'Centro de Salud.',
                'letter' => 'B'
            ],
            [
                'question_id' => 2,
                'value' => 'Medicina natural.',
                'letter' => 'C'
            ],
            [
                'question_id' => 2,
                'value' => 'Médico particular.',
                'letter' => 'D'
            ],
            [
                'question_id' => 2,
                'value' => 'Hospital.',
                'letter' => 'E'
            ],
            [
                'question_id' => 2,
                'value' => 'EPS.',
                'letter' => 'F'
            ],
            [
                'question_id' => 2,
                'value' => 'Ninguno.',
                'letter' => 'G'
            ],
            [
                'question_id' => 2,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'H'
            ],
            [
                'question_id' => 3,
                'value' => 'Centro de Salud.',
                'letter' => 'B'
            ],
            [
                'question_id' => 3,
                'value' => 'Medicina natural.',
                'letter' => 'C'
            ],
            [
                'question_id' => 3,
                'value' => 'Médico particular.',
                'letter' => 'D'
            ],
            [
                'question_id' => 3,
                'value' => 'Hospital.',
                'letter' => 'E'
            ],
            [
                'question_id' => 3,
                'value' => 'EPS.',
                'letter' => 'F'
            ],
            [
                'question_id' => 3,
                'value' => 'Ninguno.',
                'letter' => 'G'
            ],
            [
                'question_id' => 3,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'H'
            ],
            [
                'question_id' => 4,
                'value' => 'Propia.',
                'letter' => 'A'
            ],
            [
                'question_id' => 4,
                'value' => 'Arrendada.',
                'letter' => 'B'
            ],
            [
                'question_id' => 4,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'C'
            ],
            [
                'question_id' => 5,
                'value' => 'Cocina.',
                'letter' => 'A'
            ],
            [
                'question_id' => 5,
                'value' => 'Comedor.',
                'letter' => 'B'
            ],
            [
                'question_id' => 5,
                'value' => 'Sala.',
                'letter' => 'C'
            ],
            [
                'question_id' => 5,
                'value' => 'Alcobas.',
                'letter' => 'D'
            ],
            [
                'question_id' => 5,
                'value' => 'Baño.',
                'letter' => 'E'
            ],
            [
                'question_id' => 5,
                'value' => 'Patio.',
                'letter' => 'F'
            ]
        ];
        DB::table('answer_options')->insert($answerOptions);
    }
}
