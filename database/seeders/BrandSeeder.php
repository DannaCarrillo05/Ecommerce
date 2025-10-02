<?php

namespace Database\Seeders;

use App\Models\Brand;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    
    public function run(): void
    {
        $myBrand1 = new Brand();
        $myBrand1->name = 'Samsung';
        $myBrand1->save();

        $myBrand2 = new Brand();
        $myBrand2->name = 'Nike ';
        $myBrand2->save();

        $myBrand3 = new Brand();
        $myBrand3->name = 'Adidas';
        $myBrand3->save();

        Brand::factory(100)->create();
    }
}
