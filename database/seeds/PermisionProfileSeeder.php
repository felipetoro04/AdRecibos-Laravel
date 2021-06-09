<?php

use Illuminate\Database\Seeder;

class PermisionProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisions_profiles = [];

        foreach(range(1,20) as $index){
            $permisions_profiles[]= [
                'idProfile'=>rand(1,2),
                'idPermission'=>rand(1,12),                

            ];

        }
        DB::table('permisions_profiles') ->insert($permisions_profiles);
    }
}
