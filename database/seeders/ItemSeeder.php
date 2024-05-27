<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Sample Item 1']);
        Item::create(['name' => 'Sample Item 2']);
    }
}

