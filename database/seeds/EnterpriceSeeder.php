<?php

use Illuminate\Database\Seeder;

class EnterpriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enterprices = [];
                        
        foreach(range(1,20) as $index){
            $enterprices[]= [
                'bussinessName'=> "bussinessName $index",
                'idTypeDoc'=>rand(1,2),               
                'numberDoc'=>rand(1,10000),
                
            ];
        }
        
        DB::table('enterprices')->insert($enterprices);
    }
}
