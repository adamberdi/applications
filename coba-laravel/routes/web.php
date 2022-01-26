<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adam Berdi R. Adipati",
        "email" => "adamberdi46@gmail.com",
        "birth" => "04 September 1999",
        "address" => "Jln Anggur 7 No 12 Blok 4 Perumnas Kabupaten Subang, Jawa Barat 41211",
        "image" => "pp.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adam Berdi R. Adipati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos ducimus enim nobis voluptatem delectus ipsa repudiandae doloribus sit error omnis, accusantium, ab praesentium quae. Qui voluptate consectetur cumque non velit atque magnam perferendis iste doloribus quisquam quos distinctio nemo ut accusamus nesciunt dolore dolores explicabo praesentium blanditiis, ipsam dolor illo expedita obcaecati aperiam. Laboriosam tempora harum natus explicabo vitae dolor provident vero laborum eius nisi illum consequuntur ducimus mollitia, sint ratione dignissimos. Velit molestiae necessitatibus consequuntur earum laudantium dolor?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suci Wulandari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex natus et animi tempora, autem odit, ratione voluptas velit repudiandae excepturi omnis, dolor nobis harum iste aliquid laudantium. Totam quas doloribus minima error voluptatibus, consectetur eveniet temporibus fuga necessitatibus odio, sunt ad consequuntur saepe voluptatem itaque cumque magnam voluptatum dolorem minus delectus eaque tenetur accusantium exercitationem? Quos aliquid error adipisci repellat blanditiis, ab vero cupiditate est corrupti id commodi ullam vel quibusdam explicabo asperiores facilis animi numquam dicta illum aliquam voluptatem eum. Eaque sequi deserunt nesciunt dolorem! Quos numquam sed laboriosam ratione quam ea, ipsam dolorem omnis nostrum ullam alias repellendus?."
        ],
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adam Berdi R. Adipati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos ducimus enim nobis voluptatem delectus ipsa repudiandae doloribus sit error omnis, accusantium, ab praesentium quae. Qui voluptate consectetur cumque non velit atque magnam perferendis iste doloribus quisquam quos distinctio nemo ut accusamus nesciunt dolore dolores explicabo praesentium blanditiis, ipsam dolor illo expedita obcaecati aperiam. Laboriosam tempora harum natus explicabo vitae dolor provident vero laborum eius nisi illum consequuntur ducimus mollitia, sint ratione dignissimos. Velit molestiae necessitatibus consequuntur earum laudantium dolor?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suci Wulandari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex natus et animi tempora, autem odit, ratione voluptas velit repudiandae excepturi omnis, dolor nobis harum iste aliquid laudantium. Totam quas doloribus minima error voluptatibus, consectetur eveniet temporibus fuga necessitatibus odio, sunt ad consequuntur saepe voluptatem itaque cumque magnam voluptatum dolorem minus delectus eaque tenetur accusantium exercitationem? Quos aliquid error adipisci repellat blanditiis, ab vero cupiditate est corrupti id commodi ullam vel quibusdam explicabo asperiores facilis animi numquam dicta illum aliquam voluptatem eum. Eaque sequi deserunt nesciunt dolorem! Quos numquam sed laboriosam ratione quam ea, ipsam dolorem omnis nostrum ullam alias repellendus?."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug)
            $new_post = $post;
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
