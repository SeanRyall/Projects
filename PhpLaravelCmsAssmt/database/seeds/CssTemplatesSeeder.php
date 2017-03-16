<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CssTemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('css_templates')->insert([
            'name' => 'Template 1',
            'description' => str_random(20),
            'is_active' => 'yes',
            'css_content' => str_random(10),
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('css_templates')->insert([
            'name' => 'Template 2',
            'description' => str_random(20),
            'is_active' => 'no',
            'css_content' => str_random(10),
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('css_templates')->insert([
            'name' => 'Template 3',
            'description' => str_random(20),
            'is_active' => 'no',
            'css_content' => str_random(10),
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('css_templates')->insert([
            'name' => 'Template 4',
            'description' => str_random(20),
            'is_active' => 'yes',
            'css_content' => str_random(10),
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}


