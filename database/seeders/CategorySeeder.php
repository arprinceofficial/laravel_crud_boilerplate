<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'mobile', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'laptop', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'tablet', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'camera', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'accessories', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'headphone', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'speaker', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'smartwatch', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'tv', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'monitor', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'printer', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'scanner', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'projector', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'networking', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'storage', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'software', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'gaming', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'home', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'kitchen', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'furniture', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'home decor', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'home improvement', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'home security', 'created_at' => now(), 'updated_at' => now()],
            ['name'=>'home appliances', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
