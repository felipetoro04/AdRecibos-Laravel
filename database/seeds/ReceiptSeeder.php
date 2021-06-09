<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $receipts = [];
                        
        foreach(range(1,20) as $index){
            $receipts[]= [
                'idEnterprice'=>rand(1,3),               
                'numberReceipt'=>rand(1,10000),
                'issueDate'=> now(),
                'expirationDate'=>now(),
                'amountPayable'=> $faker->randomDigitNot(0) * 100, 
                'idStatus'=> rand(6,7),
                'idUser'=>rand(1,20),
                'created_at' => now(),
                'updated_at' => now()
                      
            ];
        }
        
        DB::table('receipts')->insert($receipts);
    }
}
