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
        ]);
        Expert::create([
            'expert_name'=>'hazem',
            'email'=>'hazem@gmail.com',
            'password'=>123,
        ]);
        Expert::create([
            'expert_name'=>'abd',
            'email'=>'abd@gmail.com',
            'password'=>123,
        ]);
    }
}
