<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContentAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contentareas')->insert([
            'name' => 'Header',
            'alias' => 'header',
            'description' => str_random(20),
            'order' => 1,
            'created_by_id' => '1',
            'modified_by_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contentareas')->insert([
            'name' => 'Footer',
            'alias' => 'footer',
            'description' => str_random(20),
            'order' => 3,
            'created_by_id' => '2',
            'modified_by_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contentareas')->insert([
            'name' => 'Main',
            'alias' => 'main',
            'description' => str_random(20),
            'order' => 2,
            'created_by_id' => '1',
            'modified_by_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('contentareas')->insert([
            'name' => 'SubFooter',
            'alias' => 'subfooter',
            'description' => str_random(20),
            'order' => 4,
            'created_by_id' => '3',
            'modified_by_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}

