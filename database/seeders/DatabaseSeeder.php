<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Oğuz Demir',
            'email' => 'oguz@pikselist.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), // password
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);
/* 
        $faker = \Faker\Factory::create();

        DB::table('artists')->insert([
            'name' => $faker->name(),
            'content_az' => $faker->text(),
            'content_en' => $faker->text(),
            'image' => 'https://dummyimage.com/400x400/b33bb3/1e2480',
            'status' => true,
        ]);
        
        DB::table('artists')->insert([
            'name' => $faker->name(),
            'content_az' => $faker->text(),
            'content_en' => $faker->text(),
            'image' => 'https://dummyimage.com/400x400/b33bb3/1e2480',
            'status' => true,
        ]);

        DB::table('artists')->insert([
            'name' => $faker->name(),
            'content_az' => $faker->text(),
            'content_en' => $faker->text(),
            'image' => 'https://dummyimage.com/400x400/b33bb3/1e2480',
            'status' => true,
        ]);

        DB::table('artists')->insert([
            'name' => $faker->name(),
            'content_az' => $faker->text(),
            'content_en' => $faker->text(),
            'image' => 'https://dummyimage.com/400x400/b33bb3/1e2480',
            'status' => true,
        ]);
 */
        
        //DB::table('categories')->insert([ 'name' =>  'Painting' ]);


        // \App\Models\User::factory(10)->create();
    }
}
