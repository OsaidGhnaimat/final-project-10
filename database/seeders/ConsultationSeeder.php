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
            'consultation_name'=>'con2',
            'consultation_img'=>'./uploads/1647641649186382583_439882964107808_3293850245214207297_n.jpg',
            'title'=>'title',
            'price'=>'25',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1    
        ]);
        Consultation::create([
            'consultation_name'=>'con2',
            'consultation_img'=>'./uploads/1647641649186382583_439882964107808_3293850245214207297_n.jpg',
            'title'=>'title',
            'price'=>'25',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1
        ]);
        Consultation::create([
            'consultation_name'=>'con2',
            'consultation_img'=>'./uploads/1647641649186382583_439882964107808_3293850245214207297_n.jpg',
            'title'=>'title',
            'price'=>'25',
            'description'=>'desc',
            'expert_id'=>1,
            'category_id'=>1
        ]);
    }
}
