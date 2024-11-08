<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category1 = Category::create(['name' => 'Electronics']);
        $category2 = Category::create(['name' => 'Books']);
        $category3 = Category::create(['name' => 'Clothing']);


    }
}
