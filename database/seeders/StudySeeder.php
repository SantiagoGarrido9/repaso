<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::create([
            'code' => 'ASD123',
            'name' => 'Desarrollo de Aplicaciones Multiplataforma',
            'abreviation' => 'DAM'
        ]);

        Study::create([
            'code' => 'ASD124',
            'name' => 'Desarrollo de Aplicaciones Web',
            'abreviation' => 'DAW'
        ]);
    }
}
