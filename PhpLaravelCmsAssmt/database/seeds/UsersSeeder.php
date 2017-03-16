<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fName' => 'Sean' ,
            'lName' => 'Ryall' ,
            'email' => 'sean@sean.com' ,
            'password' => Hash::make( '123123' ) ,
            'created_by_id' => '1',
            'modified_by_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fName' => 'Quinn' ,
            'lName' => 'Paul' ,
            'email' => 'me@sean.com' ,
            'password' => Hash::make( '234234' ) ,
            'created_by_id' => '2',
            'modified_by_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fName' => 'Olivier' ,
            'lName' => 'James' ,
            'email' => 'another@sean.com' ,
            'password' => Hash::make( '345345' ) ,
            'created_by_id' => '3',
            'modified_by_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fName' => 'Danielle' ,
            'lName' => 'Lepine' ,
            'email' => 'again@sean.com' ,
            'password' => Hash::make( '456456' ) ,
            'created_by_id' => '1',
            'modified_by_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
