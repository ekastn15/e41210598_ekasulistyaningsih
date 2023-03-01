<?php

namespace App\Models;


class Post {
   private static $blog_posts =[
    [
        "judul" => "Blog Pertama",
        "Penulis" => "Eka Sulistyaningsih",
        "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
        Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
        porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam, 
        eligendi dolor ipsum. Vero quos ipsam, mollitia illo, sint dolores neque, accusantium adipisci ex 
        nobis quisquam laudantium corporis qui repudiandae."
    ],
    [
        "judul" => "Blog Kedua",
        "Penulis" => "Lusy Damayanti",
        "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
        Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
        porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam,"
    ]
    ];
    public static function all(){
        return collect (self::$blog_posts);
    }
}
