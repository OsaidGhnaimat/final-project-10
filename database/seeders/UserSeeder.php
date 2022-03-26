<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt(123),
            'user_img'=>'./uploads/1647643520A6CE561B-BEF8-455F-9DAD-1D51CAC309D1.jpg',
            'role_id'=>1
        ]);
        User::create([
            'user_name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123),
            'user_img'=>'./uploads/1647643520A6CE561B-BEF8-455F-9DAD-1D51CAC309D1.jpg',
            'role_id'=>2
        ]);
        
    }
}
