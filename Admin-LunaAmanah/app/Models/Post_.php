<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "tittle" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Abif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod perspiciatis, repellat eum labore, 
            deleniti obcaecati sed eveniet totam nesciunt a vitae error quibusdam cupiditate accusantium praesentium 
            laborum rerum numquam dolorum! Incidunt mollitia beatae impedit ratione eaque officiis quos magni autem commodi 
            veritatis nesciunt sequi libero, quod reprehenderit. Molestiae voluptatum mollitia deserunt repellendus perspiciatis? 
            Impedit autem, veniam debitis odio repellat obcaecati facere doloribus, sit dolore molestiae voluptatibus dignissimos, 
            placeat ullam architecto ipsum blanditiis a hic? Consequuntur laborum totam ipsum sit distinctio."
        ],
        [
            "tittle" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Abib",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod perspiciatis, repellat eum labore, 
            deleniti obcaecati sed eveniet totam nesciunt a vitae error quibusdam cupiditate accusantium praesentium 
            laborum rerum numquam dolorum! Incidunt mollitia beatae impedit ratione eaque officiis quos magni autem commodi 
            veritatis nesciunt sequi libero, quod reprehenderit. Molestiae voluptatum mollitia deserunt repellendus perspiciatis? 
            Impedit autem, veniam debitis odio repellat obcaecati facere doloribus, sit dolore molestiae voluptatibus dignissimos, 
            placeat ullam architecto ipsum blanditiis a hic? Consequuntur laborum totam ipsum sit distinctio."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
