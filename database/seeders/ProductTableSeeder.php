<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Laptop 1',
            'slug'=> 'Laptop-1',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>1000,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 2',
            'slug'=> 'Laptop-2',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>1200,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 3',
            'slug'=> 'Laptop-3',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>1500,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 4',
            'slug'=> 'Laptop-4',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>800,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 5',
            'slug'=> 'Laptop-5',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>600,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 6',
            'slug'=> 'Laptop-6',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>500,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 7',
            'slug'=> 'Laptop-7',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>450,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 8',
            'slug'=> 'Laptop-8',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>300,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 9',
            'slug'=> 'Laptop-9',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>250,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 10',
            'slug'=> 'Laptop-10',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>650,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 11',
            'slug'=> 'Laptop-11',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>750,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        Product::create([
            'name'=>'Laptop 12',
            'slug'=> 'Laptop-12',
            'details'=>'15 inch, 1TB SSD, 16 RAM',
            'price'=>850,
            'description'=>'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);
    }
}
