<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors=[
            [
                'name' => 'အချစ်',
            ],
            [
                'name' => 'စွန့်စားခန်း',
            ],
            [
                'name' => 'အောင်မြင်ရေး',
            ],
            [
                'name'=> 'စုံထောက်'
            ]

        ];
    //   foreach($authors as $author){
    //     DB::table('authors')->insert($author);
    //   }
        Category::insert($authors);
    }
}
