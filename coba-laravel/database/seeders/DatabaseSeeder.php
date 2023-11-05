<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Widya Dwi Indrianti',
        //     'email' => 'widyaindrianti06@gmial.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ran Takahashi',
        //     'email' => 'Takahaashi12@gmial.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);
        Category::create([
            'name' => 'Web Personal',
            'slug' => 'web-personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'Title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nobis ipsa nesciunt dignissimos deserunt necessitatibus, odio iusto quasi maiores possimus ab perspiciatis porro maxime doloribus repellendus esse enim excepturi autem voluptates accusamus vitae velit et? Mollitia eligendi neque hic dolores sequi porro laboriosam recusandae ullam, deleniti excepturi ea omnis error ratione libero obcaecati officiis delectus maxime placeat facere fuga veniam, voluptates repellat eveniet? Ratione, sed? Provident, minus aspernatur vitae unde officia distinctio consequatur corporis culpa quos illum dicta alias hic expedita magni vero eligendi placeat dolorem laudantium error dignissimos pariatur ad? Ipsum dignissimos provident voluptates magni delectus? Velit, qui facere!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'Title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nobis ipsa nesciunt dignissimos deserunt necessitatibus, odio iusto quasi maiores possimus ab perspiciatis porro maxime doloribus repellendus esse enim excepturi autem voluptates accusamus vitae velit et? Mollitia eligendi neque hic dolores sequi porro laboriosam recusandae ullam, deleniti excepturi ea omnis error ratione libero obcaecati officiis delectus maxime placeat facere fuga veniam, voluptates repellat eveniet? Ratione, sed? Provident, minus aspernatur vitae unde officia distinctio consequatur corporis culpa quos illum dicta alias hic expedita magni vero eligendi placeat dolorem laudantium error dignissimos pariatur ad? Ipsum dignissimos provident voluptates magni delectus? Velit, qui facere!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'Title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nobis ipsa nesciunt dignissimos deserunt necessitatibus, odio iusto quasi maiores possimus ab perspiciatis porro maxime doloribus repellendus esse enim excepturi autem voluptates accusamus vitae velit et? Mollitia eligendi neque hic dolores sequi porro laboriosam recusandae ullam, deleniti excepturi ea omnis error ratione libero obcaecati officiis delectus maxime placeat facere fuga veniam, voluptates repellat eveniet? Ratione, sed? Provident, minus aspernatur vitae unde officia distinctio consequatur corporis culpa quos illum dicta alias hic expedita magni vero eligendi placeat dolorem laudantium error dignissimos pariatur ad? Ipsum dignissimos provident voluptates magni delectus? Velit, qui facere!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'Title' => 'Judul Keempat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nobis ipsa nesciunt dignissimos deserunt necessitatibus, odio iusto quasi maiores possimus ab perspiciatis porro maxime doloribus repellendus esse enim excepturi autem voluptates accusamus vitae velit et? Mollitia eligendi neque hic dolores sequi porro laboriosam recusandae ullam, deleniti excepturi ea omnis error ratione libero obcaecati officiis delectus maxime placeat facere fuga veniam, voluptates repellat eveniet? Ratione, sed? Provident, minus aspernatur vitae unde officia distinctio consequatur corporis culpa quos illum dicta alias hic expedita magni vero eligendi placeat dolorem laudantium error dignissimos pariatur ad? Ipsum dignissimos provident voluptates magni delectus? Velit, qui facere!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
