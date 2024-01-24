<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample product data
        $products = [
            ['name' => 'Product 1', 'price' => 19.99, 'quantity' => 50],
            ['name' => 'Product 2', 'price' => 29.99, 'quantity' => 30],
            ['name' => 'Product 3', 'price' => 39.99, 'quantity' => 20],
            // Add more sample products as needed
        ];

        // Insert data into the 'products' table
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
