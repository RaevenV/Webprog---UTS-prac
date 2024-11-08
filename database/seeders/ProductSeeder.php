<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Using fixed category IDs based on the earlier defined categories
        Product::create([
            'name' => 'Laptop',
            'description' => 'A powerful laptop.',
            'category_id' => 1, // Assuming category_id 1 is Electronics
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Novel',
            'description' => 'A thrilling novel.',
            'category_id' => 2, // Assuming category_id 2 is Books
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Textbook',
            'description' => 'An informative textbook.',
            'category_id' => 2, // Assuming category_id 2 is Books
            'stock' => 70,
        ]);

        Product::create([
            'name' => 'T-shirt',
            'description' => 'A comfortable T-shirt.',
            'category_id' => 3, // Assuming category_id 3 is Clothing
            'stock' => 200,
        ]);

        Product::create([
            'name' => 'Jeans',
            'description' => 'Stylish jeans.',
            'category_id' => 3, // Assuming category_id 3 is Clothing
            'stock' => 150,
        ]);
    }
}
