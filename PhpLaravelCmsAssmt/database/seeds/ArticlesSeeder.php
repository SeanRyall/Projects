<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'name' => 'Article 1',
            'title' => 'Things To Do In Denver When You\'re Dead',
            'description' => str_random(20),
            'all_pages' => 'no',
            'html_content' => "<p>".str_random(100)."</p>",
            'page_id' => '1',
            'contentarea_id' => '4',
            'created_by_id' => '1',
            'modified_by_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('articles')->insert([
            'name' => 'Article 2',
            'title' => 'Nighttime In The Switching Yard',
            'description' => str_random(20),
            'all_pages' => 'no',
            'html_content' => "<p>".str_random(100)."</p>",
            'page_id' => '2',
            'contentarea_id' => '2',
            'created_by_id' => '2',
            'modified_by_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('articles')->insert([
            'name' => 'Article 3',
            'title' => 'Gorilla, You\'re A Desperado' ,
            'description' => str_random(20),
            'all_pages' => 'no',
            'html_content' => "<p>".str_random(100)."</p>",
            'page_id' => '3',
            'contentarea_id' => '3',
            'created_by_id' => '4',
            'modified_by_id' => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('articles')->insert([
            'name' => 'Article 4',
            'title' => 'Roland the Headless Thompson Gunner',
            'description' => str_random(20),
            'all_pages' => 'no',
            'html_content' => "<p>".str_random(100)."</p>",
            'page_id' => '4',
            'contentarea_id' => '1',
            'created_by_id' => '3',
            'modified_by_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
