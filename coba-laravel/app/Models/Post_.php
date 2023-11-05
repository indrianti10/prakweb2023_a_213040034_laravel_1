<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul post pertama",
            "author" => "Widya Dwi Indrianti",
            "Body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem est, quas quisquam provident molestiae blanditiis, 
            voluptas doloremque pariatur consequuntur vel tempora maiores cum 
            voluptatem sequi unde amet quia tenetur possimus doloribus,
            sunt sapiente et deleniti. Dolore natus debitis voluptate? Voluptates,
            iste vitae? Aperiam, tenetur. Asperiores, accusamus ab repellendus sint minus, 
            necessitatibus placeat expedita soluta ut voluptatem enim cupiditate voluptate 
            repudiandae sit laudantium quasi eaque voluptatum laboriosam, eius facere consequuntur ipsam modi eligendi labore. 
            Voluptates amet at commodi veniam deserunt eius!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul post kedua",
            "author" => "Ran Takahashi",
            "Body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem est, quas quisquam provident molestiae blanditiis, 
            voluptas doloremque pariatur consequuntur vel tempora maiores cum 
            voluptatem sequi unde amet quia tenetur possimus doloribus,
            sunt sapiente et deleniti. Dolore natus debitis voluptate? Voluptates,
            iste vitae? Aperiam, tenetur. Asperiores, accusamus ab repellendus sint minus, 
            necessitatibus placeat expedita soluta ut voluptatem enim cupiditate voluptate 
            repudiandae sit laudantium quasi eaque voluptatum laboriosam, eius facere consequuntur ipsam modi eligendi labore. 
            Voluptates amet at commodi veniam deserunt eius!"
        ]
        ];

        public static function all() {
            return collect(self::$blog_posts);
        }

        public static function find($slug) {
            $posts = static::all();
            return $posts-> firstWhere('slug',$slug);
        }
}
