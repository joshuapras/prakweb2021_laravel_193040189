<?php

namespace App\Models;


class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Joshua uwauwa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cumque laboriosam enim ratione? Modi officia vitae nulla ut tenetur voluptas vero possimus, facilis aspernatur molestias ipsum quam a nemo deserunt ipsam earum ipsa est ad veritatis deleniti? Magnam eos molestiae ad consectetur expedita, enim animi saepe modi nisi quis similique, id placeat explicabo commodi aliquid exercitationem, qui ipsum nemo perferendis assumenda! Iusto, natus rerum possimus aperiam qui aspernatur doloribus recusandae, non sequi excepturi, vel deserunt. Reprehenderit in illum similique distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Joshua Ganteng",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, officiis ex. Veniam placeat ipsum velit dolor id ratione eum facilis corporis ab voluptatum maiores expedita, maxime doloribus similique magnam et autem perferendis totam obcaecati assumenda! Iure cumque beatae laboriosam architecto magni modi amet aperiam fugit ea deleniti reprehenderit, alias enim quis incidunt. Sed vero commodi temporibus vitae doloremque ipsum ratione tempora ducimus reiciendis placeat quaerat, dolorum debitis ex libero optio! Porro et ullam quia nisi voluptas aliquid. A eos commodi, atque quod quos rem molestiae. Laborum obcaecati at blanditiis facilis!"
        ],
    ]; 

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts  = static::all();

         return $posts ->firstWHere('slug', $slug);
    }
}

