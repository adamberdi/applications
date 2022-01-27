<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Adam",
            "slug" => "judul-post-pertama",
            "author" => "Adam Berdi R. Adipati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos ducimus enim nobis voluptatem delectus ipsa repudiandae doloribus sit error omnis, accusantium, ab praesentium quae. Qui voluptate consectetur cumque non velit atque magnam perferendis iste doloribus quisquam quos distinctio nemo ut accusamus nesciunt dolore dolores explicabo praesentium blanditiis, ipsam dolor illo expedita obcaecati aperiam. Laboriosam tempora harum natus explicabo vitae dolor provident vero laborum eius nisi illum consequuntur ducimus mollitia, sint ratione dignissimos. Velit molestiae necessitatibus consequuntur earum laudantium dolor?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suci Wulandari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex natus et animi tempora, autem odit, ratione voluptas velit repudiandae excepturi omnis, dolor nobis harum iste aliquid laudantium. Totam quas doloribus minima error voluptatibus, consectetur eveniet temporibus fuga necessitatibus odio, sunt ad consequuntur saepe voluptatem itaque cumque magnam voluptatum dolorem minus delectus eaque tenetur accusantium exercitationem? Quos aliquid error adipisci repellat blanditiis, ab vero cupiditate est corrupti id commodi ullam vel quibusdam explicabo asperiores facilis animi numquam dicta illum aliquam voluptatem eum. Eaque sequi deserunt nesciunt dolorem! Quos numquam sed laboriosam ratione quam ea, ipsam dolorem omnis nostrum ullam alias repellendus?."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
