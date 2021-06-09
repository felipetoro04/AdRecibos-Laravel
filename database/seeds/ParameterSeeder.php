<?php

use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parameters = [];

        foreach(range(1,20) as $index){
            $parameters[]= [
                'type'=> "Type $index",               
                'code'=> "Code $index",
                'description'=> "description $index",
                'Value'=> "Value $index", 

            ];

        }
        DB::table('parameters') ->insert($parameters);
    }
}
