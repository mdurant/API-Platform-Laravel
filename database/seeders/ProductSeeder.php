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
        Product::create([
            'name' => 'Laptop',
            'description' => 'A high-performance laptop',
            'price' => 1200.00,
        ]);

        Product::create([
            'name' => 'Phone',
            'description' => 'A smartphone with a great camera',
            'price' => 800.00,
        ]);
    }
}
