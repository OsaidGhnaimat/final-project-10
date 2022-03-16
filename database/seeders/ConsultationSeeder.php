<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation;
class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consultation::create([
            'consultation_name'=>'con1',
            'title'=>'title',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1
        ]);
        Consultation::create([
            'consultation_name'=>'con2',
            'title'=>'title',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1
        ]);
        Consultation::create([
            'consultation_name'=>'con3',
            'title'=>'title',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1
        ]);
    }
}
