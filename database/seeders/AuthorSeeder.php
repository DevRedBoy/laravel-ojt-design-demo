<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
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
                'name' => 'ချစ်ဦးညို',
                'biography' => 'has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letras',
                'photo' => null,
            ],
            [
                'name' => 'ခင်ခင်ထူး',
                'biography' => 'has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letras',
                'photo' => null,
            ],
            [
                'name' => 'သိုးဆောင်း',
                'biography' => 'has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letras',
                'photo' => null,
            ],

        ];
    //   foreach($authors as $author){
    //     DB::table('authors')->insert($author);
    //   }
        DB::table('authors')->insert($authors);
    }

}
