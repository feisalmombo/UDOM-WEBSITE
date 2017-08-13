<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
        	'name'=>'feisalmombo',
        	'email'=>'feisalmombo29@gmail.com',
        	'password'=>bcrypt('123456789fm'),
            'is_admin' => true,
            ]);

        User::create([
            'name'=>'Normal User',
            'email'=>'user1@gmail.com',
            'password'=>bcrypt('123456789'),
            'is_admin' => false,
            ]);
    }
}
