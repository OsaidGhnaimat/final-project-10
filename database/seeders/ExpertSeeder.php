<?php

namespace Database\Seeders;
use App\Models\Expert;

use Illuminate\Database\Seeder;

class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expert::create([
            'expert_name'=>'Osaid',
            'email'=>'Osaid@gmail.com',
            'password'=>123,
            'expert_img'=>'./uploads/1647641618240589636_512037056892398_566990195833430336_n.jpg',
            'bio'=>'biobiobiobiobiobiobiobiobiobiobiobiobio',
            'certifications'=>'certificationscertificationscertificationscertifications',
            'experience'=>'experienceexperienceexperience',
            'role_id' => 3
            
        ]);
        Expert::create([
            'expert_name'=>'hazem',
            'email'=>'hazem@gmail.com',
            'password'=>123,
            'expert_img'=>'./uploads/1647641618240589636_512037056892398_566990195833430336_n.jpg',
            'bio'=>'biobiobiobiobiobiobiobiobiobiobiobiobio',
            'certifications'=>'certificationscertificationscertificationscertifications',
            'experience'=>'experienceexperienceexperience',
            'role_id' => 3
        ]);
        Expert::create([
            'expert_name'=>'abd',
            'email'=>'abd@gmail.com',
            'password'=>123,
            'expert_img'=>'./uploads/1647641618240589636_512037056892398_566990195833430336_n.jpg',
            'bio'=>'biobiobiobiobiobiobiobiobiobiobiobiobio',
            'certifications'=>'certificationscertificationscertificationscertifications',
            'experience'=>'experienceexperienceexperience',
            'role_id' => 3
        ]);
    }
}
