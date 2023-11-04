<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Widya Dwi Indrianti",
        "email" => "widyaindrianti06@gmail.com",
        "image" => "foto1.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul post kedua",
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman sigle post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul post kedua",
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

    $new_post = [];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
  

