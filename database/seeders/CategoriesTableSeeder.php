<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Sample category data
                $categories = [
                    ['name' => 'Electronics'],
                    ['name' => 'Clothing'],
                    ['name' => 'Books'],
                ];
                foreach ($categories as $category) {
                    Category::create($category);
                }
    }
}
