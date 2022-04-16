<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // User::factory(5)->create();
        // Post::factory(20)->create();

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('admin'), 
            'phone' => '081234567890',
            'role' => 'administrator'
        ]);

        User::create([
            'name' => 'Mirza Qusyairi',
            'username' => 'mirzaq',
            'email' => 'mirza@gmail.com', 
            'password' => bcrypt('mirza'),
            'phone' => '081234567890',
            'role' => 'author'
        ]);

        User::create([
            'name' => 'Muhammad Sulthon',
            'username' => 'msulthon',
            'email' => 'sulthon@gmail.com', 
            'password' => bcrypt('sulthon'),
            'phone' => '081234567890',
            'role' => 'author'
        ]);

        Post::create([
            'title' => 'Judul Pertama', 
            'slug' => 'judul-pertama' , 
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, aperiam amet placeat molestiae sit temporibus aspernatur, voluptates, pariatur molestias asperiores similique ex omnis inventore necessitatibus cum odit officia eum ab expedita nemo suscipit enim. Temporibus, odio ab cumque dolor iste ut, officiis nihil fugit nulla rerum tempore quaerat quisquam! Ipsum fugit consequuntur odit! Nostrum reprehenderit laboriosam libero nihil amet. Esse odio architecto ipsam libero neque aut praesentium maiores ipsum repudiandae harum unde a, obcaecati voluptas necessitatibus distinctio. Debitis, similique, ratione earum numquam voluptatum quibusdam distinctio iusto nam maiores alias ab soluta praesentium dolor odio iste, dolore sint eveniet! Error asperiores ratione, porro voluptates dolorum dolores nostrum molestias molestiae fuga autem excepturi architecto dicta consectetur ab magni, deleniti aliquam velit voluptatibus voluptatum quae? Hic consequatur tempore doloribus ut ducimus labore incidunt molestiae laboriosam distinctio, dolor ad vel facilis vitae voluptas modi, provident quibusdam laudantium illum dolorum consectetur repudiandae? Natus est at, accusamus reiciendis beatae animi recusandae libero, iste ratione non veniam itaque vel expedita alias totam laboriosam porro cupiditate earum! Nobis quidem, sed quod officiis reiciendis a cupiditate incidunt nostrum mollitia exercitationem laboriosam iusto porro? At qui amet aspernatur ratione alias, deserunt ipsam praesentium vitae, sequi nam molestias harum cum facere.' ,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Kedua', 
            'slug' => 'judul-kedua' , 
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, aperiam amet placeat molestiae sit temporibus aspernatur, voluptates, pariatur molestias asperiores similique ex omnis inventore necessitatibus cum odit officia eum ab expedita nemo suscipit enim. Temporibus, odio ab cumque dolor iste ut, officiis nihil fugit nulla rerum tempore quaerat quisquam! Ipsum fugit consequuntur odit! Nostrum reprehenderit laboriosam libero nihil amet. Esse odio architecto ipsam libero neque aut praesentium maiores ipsum repudiandae harum unde a, obcaecati voluptas necessitatibus distinctio. Debitis, similique, ratione earum numquam voluptatum quibusdam distinctio iusto nam maiores alias ab soluta praesentium dolor odio iste, dolore sint eveniet! Error asperiores ratione, porro voluptates dolorum dolores nostrum molestias molestiae fuga autem excepturi architecto dicta consectetur ab magni, deleniti aliquam velit voluptatibus voluptatum quae? Hic consequatur tempore doloribus ut ducimus labore incidunt molestiae laboriosam distinctio, dolor ad vel facilis vitae voluptas modi, provident quibusdam laudantium illum dolorum consectetur repudiandae? Natus est at, accusamus reiciendis beatae animi recusandae libero, iste ratione non veniam itaque vel expedita alias totam laboriosam porro cupiditate earum! Nobis quidem, sed quod officiis reiciendis a cupiditate incidunt nostrum mollitia exercitationem laboriosam iusto porro? At qui amet aspernatur ratione alias, deserunt ipsam praesentium vitae, sequi nam molestias harum cum facere.' ,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga', 
            'slug' => 'judul-ketiga' , 
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, aperiam amet placeat molestiae sit temporibus aspernatur, voluptates, pariatur molestias asperiores similique ex omnis inventore necessitatibus cum odit officia eum ab expedita nemo suscipit enim. Temporibus, odio ab cumque dolor iste ut, officiis nihil fugit nulla rerum tempore quaerat quisquam! Ipsum fugit consequuntur odit! Nostrum reprehenderit laboriosam libero nihil amet. Esse odio architecto ipsam libero neque aut praesentium maiores ipsum repudiandae harum unde a, obcaecati voluptas necessitatibus distinctio. Debitis, similique, ratione earum numquam voluptatum quibusdam distinctio iusto nam maiores alias ab soluta praesentium dolor odio iste, dolore sint eveniet! Error asperiores ratione, porro voluptates dolorum dolores nostrum molestias molestiae fuga autem excepturi architecto dicta consectetur ab magni, deleniti aliquam velit voluptatibus voluptatum quae? Hic consequatur tempore doloribus ut ducimus labore incidunt molestiae laboriosam distinctio, dolor ad vel facilis vitae voluptas modi, provident quibusdam laudantium illum dolorum consectetur repudiandae? Natus est at, accusamus reiciendis beatae animi recusandae libero, iste ratione non veniam itaque vel expedita alias totam laboriosam porro cupiditate earum! Nobis quidem, sed quod officiis reiciendis a cupiditate incidunt nostrum mollitia exercitationem laboriosam iusto porro? At qui amet aspernatur ratione alias, deserunt ipsam praesentium vitae, sequi nam molestias harum cum facere.' ,
            'user_id' => 3
        ]);

        Post::create([
            'title' => 'Judul Keempat', 
            'slug' => 'judul-keempat' , 
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, aperiam amet placeat molestiae sit temporibus aspernatur, voluptates, pariatur molestias asperiores similique ex omnis inventore necessitatibus cum odit officia eum ab expedita nemo suscipit enim. Temporibus, odio ab cumque dolor iste ut, officiis nihil fugit nulla rerum tempore quaerat quisquam! Ipsum fugit consequuntur odit! Nostrum reprehenderit laboriosam libero nihil amet. Esse odio architecto ipsam libero neque aut praesentium maiores ipsum repudiandae harum unde a, obcaecati voluptas necessitatibus distinctio. Debitis, similique, ratione earum numquam voluptatum quibusdam distinctio iusto nam maiores alias ab soluta praesentium dolor odio iste, dolore sint eveniet! Error asperiores ratione, porro voluptates dolorum dolores nostrum molestias molestiae fuga autem excepturi architecto dicta consectetur ab magni, deleniti aliquam velit voluptatibus voluptatum quae? Hic consequatur tempore doloribus ut ducimus labore incidunt molestiae laboriosam distinctio, dolor ad vel facilis vitae voluptas modi, provident quibusdam laudantium illum dolorum consectetur repudiandae? Natus est at, accusamus reiciendis beatae animi recusandae libero, iste ratione non veniam itaque vel expedita alias totam laboriosam porro cupiditate earum! Nobis quidem, sed quod officiis reiciendis a cupiditate incidunt nostrum mollitia exercitationem laboriosam iusto porro? At qui amet aspernatur ratione alias, deserunt ipsam praesentium vitae, sequi nam molestias harum cum facere.' ,
            'user_id' => 3
        ]);
    }
}
