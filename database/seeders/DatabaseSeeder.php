<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     *
     *
     * @return void
     */
    public function run()
    {
        // Poblar la tabla 'blockTags'
        $tags = [
            ['id' => 810, 'nombre' => 'SALUD'],
            ['id' => 818,'nombre' => 'ASIGNACIÓN DE CITAS EPS FAMISANAR'],
            ['id' => 845,'nombre' => 'MEDICINA GENERAL'],
            ['id' => 895,'nombre' => 'CITA PRIORITARIA'],
            ['id' => 814,'nombre' => 'VIVIENDA'],
            ['id' => 841,'nombre' => 'INFORMACIÓN'],
            ['id' => 871,'nombre' => 'SUBSIDIO DE VIVIENDA'],
            ['id' => 1063,'nombre' => 'REQUISITOS COMPRA DE VIVIENDA'],
        ];

        DB::table('tags')->insert($tags);

        // Poblar la tabla 'asociationBlock'
        $associations = [
            ['ids_tags' => '810,818,845,895'],
            ['ids_tags' => '810,818,871'],
            ['ids_tags' => '814,841,871,1063'],
        ];

        DB::table('tag_associations')->insert($associations);
    }
}
