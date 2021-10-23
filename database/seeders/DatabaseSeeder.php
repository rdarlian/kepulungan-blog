<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
                'name' => 'Darlian Ramadhani',
                'username' => 'rembo',
                'email' => 'darlian@gmail.com',
                'password' => bcrypt('password')
            ]);

            // User::create([
                //     'name' => 'Mukti Irawan',
                //     'email' => 'muktiirawan@gmail.com',
                //     'password' => bcrypt('12345')
                // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis, eaque iusto excepturi repudiandae ab necessitatibus deserunt natus suscipit soluta error reprehenderit aspernatur! Et reprehenderit omnis aliquam illum dolore cum ad minus, odit quod tempora, possimus laborum voluptatum magni quidem? Repellendus vel quas excepturi iure, veniam explicabo doloremque aliquam nihil perspiciatis ipsam maxime necessitatibus labore? Minus alias possimus quod optio expedita et numquam! Expedita hic nulla delectus numquam repellendus minima autem debitis laboriosam dolore id perferendis, voluptatibus dolores eum commodi! In libero maxime sint quaerat itaque accusantium assumenda culpa rem harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis, eaque iusto excepturi repudiandae ab necessitatibus deserunt natus suscipit soluta error reprehenderit aspernatur! Et reprehenderit omnis aliquam illum dolore cum ad minus, odit quod tempora, possimus laborum voluptatum magni quidem? Repellendus vel quas excepturi iure, veniam explicabo doloremque aliquam nihil perspiciatis ipsam maxime necessitatibus labore? Minus alias possimus quod optio expedita et numquam! Expedita hic nulla delectus numquam repellendus minima autem debitis laboriosam dolore id perferendis, voluptatibus dolores eum commodi! In libero maxime sint quaerat itaque accusantium assumenda culpa rem harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis, eaque iusto excepturi repudiandae ab necessitatibus deserunt natus suscipit soluta error reprehenderit aspernatur! Et reprehenderit omnis aliquam illum dolore cum ad minus, odit quod tempora, possimus laborum voluptatum magni quidem? Repellendus vel quas excepturi iure, veniam explicabo doloremque aliquam nihil perspiciatis ipsam maxime necessitatibus labore? Minus alias possimus quod optio expedita et numquam! Expedita hic nulla delectus numquam repellendus minima autem debitis laboriosam dolore id perferendis, voluptatibus dolores eum commodi! In libero maxime sint quaerat itaque accusantium assumenda culpa rem harum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a quibusdam dolor animi repellendus amet exercitationem aut facere officiis, eaque iusto excepturi repudiandae ab necessitatibus deserunt natus suscipit soluta error reprehenderit aspernatur! Et reprehenderit omnis aliquam illum dolore cum ad minus, odit quod tempora, possimus laborum voluptatum magni quidem? Repellendus vel quas excepturi iure, veniam explicabo doloremque aliquam nihil perspiciatis ipsam maxime necessitatibus labore? Minus alias possimus quod optio expedita et numquam! Expedita hic nulla delectus numquam repellendus minima autem debitis laboriosam dolore id perferendis, voluptatibus dolores eum commodi! In libero maxime sint quaerat itaque accusantium assumenda culpa rem harum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
