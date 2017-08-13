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
        $this->call(UsersTable::class);
    	$this->command->info('UserTableSeeder has created successfull in the seeder');
    }
}
