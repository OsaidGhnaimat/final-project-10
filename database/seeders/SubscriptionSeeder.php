<?php

namespace Database\Seeders;
use App\Models\Subscription;
use Illuminate\Database\Seeder;


class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::create([
            'type'=>'type',
            'total_price'=>10,
            'consultation_id'=>123,
            'user_id'=>1
        ]);
        Subscription::create([
            'type'=>'user1',
            'total_price'=>20,
            'consultation_id'=>123,
            'user_id'=>1
        ]);
    }
}
