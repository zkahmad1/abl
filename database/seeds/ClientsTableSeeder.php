<?php
 
use Illuminate\Database\Seeder;
 
class ClientsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('clients')->delete();
 
        DB::table('clients')->insert([
            'UserID' => str_random(3),
            'UserName' => str_random(10),
            'BusName' => str_random(10),
            ]);
 
    }
 
}
