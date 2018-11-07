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

        // Gets user ID for seeding
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

        // Make users
        $user = new \App\User;
        $user->name = 'Galen';
        $user->email = "classclowngm@gmail.com";
        $user->password = bcrypt('galen');
        $user->save();

        $galen = \App\User::where('name', 'Galen')->first();

        // Post model
        $posts = [
            'Glass House sucks',
            'This is my favorite website.',
            'GOTTA LOVE THIS PROFESSIONAL DEISGN AND SMOOTH UI.'
        ];

        foreach ($posts as $post) {
            $item = new \App\Post;
            $item->post = $post;
            $item->user_id = $galen->id;
            $item->save();
        }
    }
}
