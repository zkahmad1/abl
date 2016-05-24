<?php
 
use Illuminate\Database\Seeder;
 
class AccountsRTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('AccountsR')->delete();
 
        DB::table('AccountsR')->insert([
            'Name' => str_random(5),
            'Location' => str_random(5),
            'ID' => rand(1,199999),
            'Terms' => rand(1,365),
            'PercGrossAR' => rand(0,100),
            'Age30' => rand(0,9999999),
            'Age60' => rand(0,9999999),
            'Age90' => rand(0,9999999),
            'Age120' => rand(0,9999999),            
            'AgeMore120' => rand(0,9999999),
            'Total' => rand(0,9999999),
            ]);
 
        
    }
 
}
