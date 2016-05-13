<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('client') -> insert ([
        	'UserID' => auto_increment,
        	'UserName' => str_random(10),
        	'BusName' => str_random (10),
        	]);

        DB::table('AccountsR') -> ([
        	'Age' => str_random(5),
        	'Balance' => str_random(5),
        	'EstUncolPerc' => str_random (1),
        	'EstUncolBal' => str_random (4),
        	]);
    }
}
