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
        $this->call(ClientsTableSeeder::class);
       
        $this->command->info('Clients table seeded!');

        $this->call(AccountsRTableSeeder::class);

        $this->command->info('AccountsR table seeded!');

    }
}
