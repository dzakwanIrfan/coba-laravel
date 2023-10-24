<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "author" => "Dzakwan Irfan Ramdhani",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, magnam delectus neque ipsum magni fugit sint inventore doloremque eaque ab molestias, qui, aperiam rerum quod veritatis. Libero quos corrupti iure nostrum vitae, corporis repellendus quisquam eligendi dolor dolorum voluptates est dolores doloribus sequi illo ab officia consequuntur necessitatibus beatae et."
        ],
        [
            "title" => "Judul Postingan Kedua",
            "slug" => "judul-postingan-kedua",
            "author" => "Malika Azra Permata",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laboriosam quas ipsa rem. Dignissimos minus et incidunt? Quas velit odit quae deleniti accusamus! Sed accusantium ut modi error reprehenderit itaque vel voluptates at doloribus voluptate dicta recusandae, repellat quisquam delectus sunt ducimus. Totam rerum magnam expedita temporibus aperiam modi laudantium quibusdam at aliquam? Maiores est magnam tempora. Consectetur odio sed, possimus commodi dolor expedita vel dignissimos itaque cupiditate consequuntur necessitatibus, ipsa esse a praesentium placeat enim eum eligendi eaque similique?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}

