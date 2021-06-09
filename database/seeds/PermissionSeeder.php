<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [];            
        foreach(range(1,20) as $index){
            $permissions[]= [
                'type'=> "Type $index",               
                'code'=> "Code $index",
                'description'=> "description $index",
                'Value'=> "Value $index", 
            
            ];
        }
        
        DB::table('permissions')->insert($permissions);
    }
}