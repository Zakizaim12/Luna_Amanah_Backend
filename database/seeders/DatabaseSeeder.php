<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'adminlunah-amanah@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Mohammad Abib',
        //     'email' => 'mohammadabibtest@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);
        //\App\Models\User::factory(3)->create();
        Category::create([
            'name' => 'Haji',
            'slug' => 'haji',
        ]);
        Category::create([
            'name' => 'Umrah',
            'slug' => 'umrah',
        ]);
        Category::create([
            'name' => 'Tour',
            'slug' => 'tour',
        ]);
        \App\Models\Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, vero exercitationem. In, tenetur vero!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, cupiditate aliquam esse quasi ex expedita eveniet dignissimos debitis dolorum quibusdam aspernatur sint itaque non? Aliquid maiores dignissimos, molestiae consectetur, quis dolore, quas ex ab atque praesentium minus voluptatum molestias. Voluptatibus, rem dicta. Aliquid, autem laudantium! Amet praesentium quod facere animi.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores incidunt amet placeat alias eveniet cumque qui beatae excepturi? Blanditiis consequuntur vero illo ratione? Nostrum et labore ut, facere magni animi! Accusantium, ullam reprehenderit tempore, aliquid aperiam eum vitae repellat sint numquam laborum totam ipsa dolores. Non quasi itaque adipisci ullam.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, vero exercitationem. In, tenetur vero!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, cupiditate aliquam esse quasi ex expedita eveniet dignissimos debitis dolorum quibusdam aspernatur sint itaque non? Aliquid maiores dignissimos, molestiae consectetur, quis dolore, quas ex ab atque praesentium minus voluptatum molestias. Voluptatibus, rem dicta. Aliquid, autem laudantium! Amet praesentium quod facere animi.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores incidunt amet placeat alias eveniet cumque qui beatae excepturi? Blanditiis consequuntur vero illo ratione? Nostrum et labore ut, facere magni animi! Accusantium, ullam reprehenderit tempore, aliquid aperiam eum vitae repellat sint numquam laborum totam ipsa dolores. Non quasi itaque adipisci ullam.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, vero exercitationem. In, tenetur vero!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, cupiditate aliquam esse quasi ex expedita eveniet dignissimos debitis dolorum quibusdam aspernatur sint itaque non? Aliquid maiores dignissimos, molestiae consectetur, quis dolore, quas ex ab atque praesentium minus voluptatum molestias. Voluptatibus, rem dicta. Aliquid, autem laudantium! Amet praesentium quod facere animi.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores incidunt amet placeat alias eveniet cumque qui beatae excepturi? Blanditiis consequuntur vero illo ratione? Nostrum et labore ut, facere magni animi! Accusantium, ullam reprehenderit tempore, aliquid aperiam eum vitae repellat sint numquam laborum totam ipsa dolores. Non quasi itaque adipisci ullam.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, vero exercitationem. In, tenetur vero!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, cupiditate aliquam esse quasi ex expedita eveniet dignissimos debitis dolorum quibusdam aspernatur sint itaque non? Aliquid maiores dignissimos, molestiae consectetur, quis dolore, quas ex ab atque praesentium minus voluptatum molestias. Voluptatibus, rem dicta. Aliquid, autem laudantium! Amet praesentium quod facere animi.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores incidunt amet placeat alias eveniet cumque qui beatae excepturi? Blanditiis consequuntur vero illo ratione? Nostrum et labore ut, facere magni animi! Accusantium, ullam reprehenderit tempore, aliquid aperiam eum vitae repellat sint numquam laborum totam ipsa dolores. Non quasi itaque adipisci ullam.</p>'
        // ]);
    }
}