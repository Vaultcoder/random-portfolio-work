<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "leo",
            'email' => "magnusson@gmail.com",
            'password' => bcrypt('secret'),
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt one",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt two",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt three",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt four",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt five",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt six",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt seven",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);
        DB::table('projekt')->insert([
            'name' => "projekt eight",
            'text' => "text",
            'icon' => "red",
            'imgone' => "red",
            'imgtwo' => "red",
            'imgthree' => "red",
            'imgmain' => "red",
            'dec' => "dec text",
            'clip' => "red",
        ]);

    }
}