<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User model
        $user = new \App\User;
        $user->name = 'Bob';
        $user->email = "bob@bob.bob";
        $user->password = bcrypt('bob');
        $user->save();
    }
}
