<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $product1 = Product::create([
            'name' => 'Keripik Singkong Original',
            'description' => 'Keripik singkong renyah dengan rasa asli yang gurih.',
            'price' => 15000,
            'is_active' => true,
        ]);

        $product2 = Product::create([
            'name' => 'Keripik Singkong Balado',
            'description' => 'Keripik singkong dengan bumbu balado pedas manis yang bikin nagih.',
            'price' => 17000,
            'is_active' => true,
        ]);

        $product3 = Product::create([
            'name' => 'Keripik Pisang Coklat',
            'description' => 'Keripik pisang manis dengan taburan bubuk coklat tebal.',
            'price' => 18000,
            'is_active' => true,
        ]);

        // Sample reviews for product 1
        Review::create(['name' => 'Budi', 'email' => 'budi@mail.com', 'product_id' => $product1->id, 'rating' => 5, 'message' => 'Keripiknya renyah banget, cocok buat cemilan santai!', 'is_approved' => true]);
        Review::create(['name' => 'Siti', 'email' => 'siti@mail.com', 'product_id' => $product1->id, 'rating' => 4, 'message' => 'Rasanya enak, gurih pas di lidah.', 'is_approved' => true]);
        Review::create(['name' => 'Rudi', 'email' => 'rudi@mail.com', 'product_id' => $product1->id, 'rating' => 5, 'message' => 'Renyah banget, recommended!', 'is_approved' => true]);

        // Sample reviews for product 2
        Review::create(['name' => 'Ani', 'email' => 'ani@mail.com', 'product_id' => $product2->id, 'rating' => 5, 'message' => 'Baladonya nampol banget!', 'is_approved' => true]);
        Review::create(['name' => 'Doni', 'email' => 'doni@mail.com', 'product_id' => $product2->id, 'rating' => 4, 'message' => 'Pedasnya pas, nagih terus.', 'is_approved' => true]);

        // Sample reviews for product 3
        Review::create(['name' => 'Rina', 'email' => 'rina@mail.com', 'product_id' => $product3->id, 'rating' => 4, 'message' => 'Pisangnya manis, cocok buat cemilan sore.', 'is_approved' => true]);
    }
}
