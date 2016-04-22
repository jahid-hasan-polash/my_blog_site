<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(['name' => 'Talha','email' => 'talha@mail.com','password' => bcrypt('a')]);

        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
