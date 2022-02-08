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
            'name' => 'Adam Berdi',
            'username' => 'adamberdi',
            'email' => 'adamberdi46@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Jessica Wulan',
        //     'email' => 'jessicawulan13@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus assumenda nam sunt aut nostrum ducimus. Vero incidunt quae cupiditate aut, vitae tenetur reiciendis? Laborum vero sequi architecto cupiditate nemo expedita quibusdam ipsa doloremque et quas assumenda, voluptate veniam, libero dignissimos blanditiis voluptates recusandae dolorem? Nam beatae earum placeat illo repellendus corrupti sint illum ipsum ex, maxime corporis molestiae ducimus molestias vitae, quis debitis sequi fugiat, quaerat nesciunt impedit rerum. Harum nemo ullam laborum non similique pariatur ipsa temporibus, molestiae, qui vitae voluptatum dicta adipisci?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus assumenda nam sunt aut nostrum ducimus. Vero incidunt quae cupiditate aut, vitae tenetur reiciendis? Laborum vero sequi architecto cupiditate nemo expedita quibusdam ipsa doloremque et quas assumenda, voluptate veniam, libero dignissimos blanditiis voluptates recusandae dolorem? Nam beatae earum placeat illo repellendus corrupti sint illum ipsum ex, maxime corporis molestiae ducimus molestias vitae, quis debitis sequi fugiat, quaerat nesciunt impedit rerum. Harum nemo ullam laborum non similique pariatur ipsa temporibus, molestiae, qui vitae voluptatum dicta adipisci?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus assumenda nam sunt aut nostrum ducimus. Vero incidunt quae cupiditate aut, vitae tenetur reiciendis? Laborum vero sequi architecto cupiditate nemo expedita quibusdam ipsa doloremque et quas assumenda, voluptate veniam, libero dignissimos blanditiis voluptates recusandae dolorem? Nam beatae earum placeat illo repellendus corrupti sint illum ipsum ex, maxime corporis molestiae ducimus molestias vitae, quis debitis sequi fugiat, quaerat nesciunt impedit rerum. Harum nemo ullam laborum non similique pariatur ipsa temporibus, molestiae, qui vitae voluptatum dicta adipisci?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis rem vero, quam sed odit fugiat architecto a placeat impedit ipsum maiores similique aspernatur repellendus necessitatibus assumenda nam sunt aut nostrum ducimus. Vero incidunt quae cupiditate aut, vitae tenetur reiciendis? Laborum vero sequi architecto cupiditate nemo expedita quibusdam ipsa doloremque et quas assumenda, voluptate veniam, libero dignissimos blanditiis voluptates recusandae dolorem? Nam beatae earum placeat illo repellendus corrupti sint illum ipsum ex, maxime corporis molestiae ducimus molestias vitae, quis debitis sequi fugiat, quaerat nesciunt impedit rerum. Harum nemo ullam laborum non similique pariatur ipsa temporibus, molestiae, qui vitae voluptatum dicta adipisci?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
