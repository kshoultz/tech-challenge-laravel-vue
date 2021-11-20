<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Translators, LLC',
            'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum quam eget venenatis varius. Praesent sit amet efficitur nisl. Nulla nisl.',
            'image_url' => 'Talkie.png',
            'active' => 'Y'
        ]);

        DB::table('posts')->insert([
            'title' => 'Rabbit Chasers',
            'paragraph' => 'Cras tortor massa, ultricies in porttitor at, efficitur id elit. Phasellus faucibus tellus vel nibh congue elementum. Duis sed lectus metus.',
            'image_url' => 'Rabbit.png',
            'active' => 'Y'
        ]);

        DB::table('posts')->insert([
            'title' => 'Security Plus',
            'paragraph' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dignissim diam et dolor cursus, eget placerat.',
            'image_url' => 'Shield.png',
            'active' => 'Y'
        ]);
    }
}
