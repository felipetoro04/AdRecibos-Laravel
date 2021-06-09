<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [];
                        
        foreach(range(1,2) as $index){
            $profiles[]= [
                'type'=> "Type $index",               
                'code'=> "Code $index",
                'description'=> "description $index",
                'Value'=> "Value $index", 
            
            ];
        }
        
        DB::table('profiles')->insert($profiles);
    }
}
  