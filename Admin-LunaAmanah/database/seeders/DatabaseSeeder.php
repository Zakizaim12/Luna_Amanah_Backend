<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Durasi;
use App\Models\Category;
use App\Models\booking;
use App\Models\Star;
use App\Models\Status;
use Illuminate\Database\Seeder;



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
        Durasi::create([
            'name' => '9 hari'
        ]);
        Durasi::create([
            'name' => '10 hari'
        ]);
        Durasi::create([
            'name' => '11 hari'
        ]);
        Durasi::create([
            'name' => '12 hari'
        ]);
        Durasi::create([
            'name' => '13 hari'
        ]);
        Durasi::create([
            'name' => '14 hari'
        ]);
        Durasi::create([
            'name' => '15 hari'
        ]);
        Durasi::create([
            'name' => '16 hari'
        ]);
        Category::create([
            'name' => 'Paket Umrah',
            'slug' => 'paket-umrah',
        ]);
        Category::create([
            'name' => 'Paket Haji',
            'slug' => 'paket-haji',
        ]);
        Category::create([
            'name' => 'Paket Tour',
            'slug' => 'paket-tour',
        ]);

        Star::create([
            'hotel_bintang' => '1'
        ]);
        Star::create([
            'hotel_bintang' => '2'
        ]);
        Star::create([
            'hotel_bintang' => '3'
        ]);
        Star::create([
            'hotel_bintang' => '4'
        ]);
        Star::create([
            'hotel_bintang' => '5'
        ]);

        Status::create([
            'status_pembayaran' => 'Belum Lunas'
        ]);
        Status::create([
            'status_pembayaran' => 'Tanpa Keterangan'
        ]);
        
        \App\Models\Post::factory(20)->create();
        \App\Models\Dakwah::factory(20)->create();
        \App\Models\booking::factory(5)->create();
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