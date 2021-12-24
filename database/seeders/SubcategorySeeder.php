<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = [
            [
                'category_id' => '1',
                'name' => 'Movie'
            ],
            [
                'category_id' => '1',
                'name' => 'Broadcast media'
            ],
            [
                'category_id' => '2',
                'name' => 'Indian Food'
            ],
            [
                'category_id' => '2',
                'name' => 'Chinese Food'
            ],
            [
                'category_id' => '3',
                'name' => 'Tata'
            ],
            [
                'category_id' => '3',
                'name' => 'Hyundai'
            ],
            [
                'category_id' => '4',
                'name' => 'Surat'
            ],
            [
                'category_id' => '4',
                'name' => 'Vapi'
            ],
            
        ];
        Subcategory::insert($subcategory);
    }
}
