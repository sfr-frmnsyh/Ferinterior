<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin Ferinterior',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Safri Firmansyah',
            'email' => 'safri.firmansyah@gmail.com',
            'password' => bcrypt('password')
        ]);

        AboutUs::create([
            'name' => 'Ferinterior',
            'address' => 'Jl. Piltover 5 no 125',
            'phone_number' => '+9955555125125',
            'link_facebook' => 'https://github.com/sfr-frmnsyh',
            'link_twitter' => 'https://github.com/sfr-frmnsyh',
            'link_instagram' => 'https://github.com/sfr-frmnsyh',
            'about' => 'Ferinterior adalah sebuah peritel perabot untuk rumah tangga dari Noxus. Pada musim dingin 1920, terdapat 5 toko Ferinterior yang tersebar di wilayah Noxus. Katalog Ferinterior yang berisi info produk Ferinterior diperkirakan adalah Toko yang pendistribusiannya terluas di seantero Runetera.'
        ]);

        Category::create([
            'name' => 'Sofa',
            'image' => 'sofa.png',
        ]);

        Category::create([
            'name' => 'Chair',
            'image' => 'chair.png',
        ]);

        Category::create([
            'name' => 'Wardrobe',
            'image' => 'wardrobe.png',
        ]);

        Category::create([
            'name' => 'Table',
            'image' => 'table.png',
        ]);
        
        Product::create([
            'id_category' => 1,
            'name' => 'Sofa Nobu',
            'price' => 795000,
            'is_ready' => true,
            'colour' => 'Gray',
            'size' => '80 x 70',
            'weight' => 38.5,
            'image' => 'products/single_sofa_nobu_gray.png',
        ]);

        Product::create([
            'id_category' => 1,
            'name' => 'Sofa Nobu',
            'price' => 795000,
            'is_ready' => true,
            'colour' => 'Blue',
            'size' => '80 x 70',
            'weight' => 38.5,
            'image' => 'products/single_sofa_nobu_blue.png',
        ]);

        Product::create([
            'id_category' => 1,
            'name' => 'Double Sofa Nobu',
            'price' => 1350000,
            'is_ready' => true,
            'colour' => 'Yellow',
            'size' => '200 x 70',
            'weight' => 44.5,
            'image' => 'products/double_sofa_nobu.png',
        ]);

        Product::create([
            'id_category' => 2,
            'name' => 'Wooden Chair',
            'price' => 185000,
            'is_ready' => true,
            'colour' => 'Brown',
            'size' => '100 x 70',
            'weight' => 9.5,
            'image' => 'products/wooden_chair.png',
        ]);

        Product::create([
            'id_category' => 2,
            'name' => 'Bubble Chair',
            'price' => 425000,
            'is_ready' => true,
            'colour' => 'White',
            'size' => '150 x 100',
            'weight' => 15.5,
            'image' => 'products/bubble_chair.png',
        ]);

        Product::create([
            'id_category' => 3,
            'name' => 'Minimalis Wood Wardrobe',
            'price' => 2585000,
            'is_ready' => true,
            'colour' => 'Brown',
            'size' => '140 x 190',
            'weight' => 50.5,
            'image' => 'products/minimalis_wood_wardrobe.png',
        ]);

        Product::create([
            'id_category' => 3,
            'name' => 'Oinetako Closet Wardrobe',
            'price' => 2355000,
            'is_ready' => true,
            'colour' => 'Brown',
            'size' => '130 x 170',
            'weight' => 46.5,
            'image' => 'products/oinetako_closet_wardrobe.png',
        ]);

        Product::create([
            'id_category' => 4,
            'name' => 'Coffe Table',
            'price' => 155000,
            'is_ready' => true,
            'colour' => 'Brown',
            'size' => '100 x 55',
            'weight' => 22.5,
            'image' => 'products/coffe_table.png',
        ]);

        Product::create([
            'id_category' => 4,
            'name' => 'Office Table Desk',
            'price' => 325000,
            'is_ready' => true,
            'colour' => 'White',
            'size' => '160 x 70',
            'weight' => 32.5,
            'image' => 'products/office_table_desk.png',
        ]);
    }
}
