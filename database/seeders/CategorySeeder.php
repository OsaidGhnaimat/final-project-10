<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name'=>'cat1',
            'category_img'=>'./uploads/1647641456231837842_497455765017194_5495927907143142126_n.jpg',
        ]);
        Category::create([
            'category_name'=>'cat2',
            'category_img'=>'./uploads/1647641456231837842_497455765017194_5495927907143142126_n.jpg',
        ]);
        Category::create([
            'category_name'=>'cat3',
            'category_img'=>'./uploads/1647641456231837842_497455765017194_5495927907143142126_n.jpg',
        ]);
        Category::create([
            'category_name'=>'cat4',
            'category_img'=>'./uploads/1647641456231837842_497455765017194_5495927907143142126_n.jpg',
        ]);
        Category::create([
            'category_name'=>'cat5',
            'category_img'=>'./uploads/1647641456231837842_497455765017194_5495927907143142126_n.jpg',
        ]);

    }
}
