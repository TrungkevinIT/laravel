<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone 15 Pro Max',
            'price' => 34990000,
            'in_stock' => true,
            'discount_percent' => 10,
            'image' => 'images/iphone.jpg' // Giả sử ảnh nằm trong public/images/
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23 Ultra',
            'price' => 28990000,
            'in_stock' => true,
            'discount_percent' => 5,
            'image' => 'images/samsung.jpg'
        ]);

        Product::create([
            'name' => 'Google Pixel 8 Pro',
            'price' => 24990000,
            'in_stock' => false, // Ví dụ sản phẩm này hết hàng
            'discount_percent' => 0,
            'image' => 'images/pixel.jpg'
        ]);
    }
}
