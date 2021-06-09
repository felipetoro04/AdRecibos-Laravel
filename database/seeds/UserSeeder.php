<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{

       /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker::create();
    $users = [];
                    
    foreach(range(1,20) as $index){
        $users[]= [
            'idTypeDoc'=>rand(1,2),               
            'numberDoc'=> "NUM DOC $index",
            'name'=> $faker->name,
            'idTypeSex'=>rand(3,5),
            'age'=> $faker->randomDigitNot(18-80), 
            'email'=> preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
            'password' => "Password $index",
            'idProfile'=> rand(1,2),
            'created_at' => now(),
            'updated_at' => now()    
        ];
    }
    
    DB::table('users')->insert($users);
}

}
