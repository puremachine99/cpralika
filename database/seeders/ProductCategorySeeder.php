<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // Kategori Utama
        $vehicle = ProductCategory::create(['name' => 'Vehicle', 'slug' => 'vehicle']);
        $technology = ProductCategory::create(['name' => 'Technology', 'slug' => 'technology']);
        $construction = ProductCategory::create(['name' => 'Construction', 'slug' => 'construction']);
        $aviation = ProductCategory::create(['name' => 'Aviation', 'slug' => 'aviation']);

        // Sub-Kategori Vehicle
        $vehicle->children()->createMany([
            ['name' => 'Armored Vehicle', 'slug' => 'armored-vehicle'],
            ['name' => 'Tactical Vehicle', 'slug' => 'tactical-vehicle'],
            ['name' => 'Special Vehicle', 'slug' => 'special-vehicle'],
            ['name' => 'Motorcycle', 'slug' => 'motorcycle'],
            ['name' => 'Electric Motorcycle', 'slug' => 'electric-motorcycle'],
            ['name' => 'Sparepart', 'slug' => 'sparepart'],
        ]);

        // Sub-Kategori Technology (contoh)
        $technology->children()->createMany([
            ['name' => 'Telecommunication', 'slug' => 'telecommunication'],
            ['name' => 'UAV', 'slug' => 'uav'],
            ['name' => 'Anti-UAV', 'slug' => 'anti-uav'],
            ['name' => 'Others', 'slug' => 'others'],
        ]);
    }
}
