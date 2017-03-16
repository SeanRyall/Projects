<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name' => 'Home',
            'alias' => 'home',
            'description' => 'this is the home page...',
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'name' => 'Cool Shitake',
            'alias' => 'coolstuff',
            'description' => 'seriously, there is some cool $hit on this page...',
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'name' => 'Frequently Asked Questions',
            'alias' => 'FAQ',
            'description' => 'questions about this site...',
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'name' => 'About Us',
            'alias' => 'aboutus',
            'description' => 'this is a page about us....',
            'created_by_id' => random_int(1,4),
            'modified_by_id' => random_int(1,4),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
