<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make users
        $user = new \App\User;
        $user->name = 'Connor';
        $user->email = "connor.mccarty.cm@gmail.com";
        $user->password = bcrypt('connor');
        $user->save();

        // Get's user ID for seeding
        $connor = \App\User::where('name', 'Connor')->first();

        // Post model
        $posts = [
            'Glass House is up and running!',
            'This is a test post.',
            'This post can be up to 500 characters. This post can be up to 500 characters. This post can be up to 500 characters. This post can be up to 500 characters.'
        ];

        foreach ($posts as $post) {
            $item = new \App\Post;
            $item->post = $post;
            $item->user_id = $connor->id;
            $item->save();
        }
    }
}
