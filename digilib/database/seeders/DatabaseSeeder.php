<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\kategori;
use \App\Models\admin;
use \App\Models\pengguna;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        admin::create([
            'name' => 'Karisma Nabil',
            'email' => 'kharismanabil@gmail.com',
            'password' => bcrypt('123')
        ]);
        pengguna::create([
            'name' => 'Iqbal',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('123')
        ]);
        // User::create([
        //     'name' => 'Nabeel Azhar',
        //     'email' => 'nabeel@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'Iqbal Fadhlurrahman',
        //     'email' => 'iqbal@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'Randika Muhammad',
        //     'email' => 'randika@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        kategori::create([
            'nama' => 'Jurnal',
            'slug' => 'jurnal',
        ]);

        kategori::create([
            'nama' => 'Artikel',
            'slug' => 'artikel',
        ]);

        kategori::create([
            'nama' => 'Novel',
            'slug' => 'novel',
        ]);

        kategori::create([
            'nama' => 'Comic',
            'slug' => 'Comic',
        ]);

        // Post::create([
        //     'title' => 'Creative Business Startup',
        //     'kategori_id' => '2',
        //     'slug' => 'creative-business-startup',
        //     'excerpt' => 'Creative Business Startup by Jen Krazel',
        //     'penulis' => 'Jen Krazel',
        //     'harga' => 0,
        //     'gambar' => '2273.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);

        // Post::create([
        //     'title' => 'Creative Business',
        //     'kategori_id' => '2',
        //     'slug' => 'creative-business',
        //     'excerpt' => 'How To Turn',
        //     'penulis' => 'Sarah Smith',
        //     'harga' => 0,
        //     'gambar' => '2.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);

        // Post::create([
        //     'title' => 'Journey To The Past',
        //     'kategori_id' => '3',
        //     'slug' => 'journey-to-the-past',
        //     'excerpt' => 'Journey To The Past By Stephen Henry',
        //     'penulis' => 'Stephen Henry',
        //     'harga' => 0,
        //     'gambar' => '3.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);

        // Post::create([
        //     'title' => 'The King Of Drugs',
        //     'kategori_id' => '4',
        //     'slug' => 'the-king-of-drugs',
        //     'excerpt' => 'The King Of Drugs',
        //     'penulis' => 'Norra Barret',
        //     'harga' => 0,
        //     'gambar' => '2.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);
        // Post::create([
        //     'title' => 'Jurnal Penelitian',
        //     'kategori_id' => '1',
        //     'slug' => 'jurnal-penelitian',
        //     'excerpt' => 'Jurnal Penelitian Ilmiah',
        //     'penulis' => 'Dr. Kusuma Wijaya',
        //     'harga' => 0,
        //     'gambar' => '3.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);
        // Post::create([
        //     'title' => 'Jurnal Sistem Informasi',
        //     'kategori_id' => '1',
        //     'slug' => 'jurnal-sistem-informasi',
        //     'excerpt' => 'Jurnal Sistem Informasi',
        //     'penulis' => 'Robert Downey Jr.',
        //     'harga' => 0,
        //     'gambar' => '4.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);
        // Post::create([
        //     'title' => 'Jurnal',
        //     'kategori_id' => '1',
        //     'slug' => 'jurnal',
        //     'excerpt' => 'jurnal',
        //     'penulis' => 'Robert Downey Jr.',
        //     'harga' => 0,
        //     'gambar' => '1.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);
        // Post::create([
        //     'title' => 'Jurnal Pengabdian',
        //     'kategori_id' => '1',
        //     'slug' => 'jurnal-pengabdian',
        //     'excerpt' => 'Jurnal Pengabdian',
        //     'penulis' => 'Robert Downey Jr.',
        //     'harga' => 0,
        //     'gambar' => '4.jpg',
        //     'abstrak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam veniam consectetur nesciunt harum modi ab similique ipsam laboriosam, corrupti fugiat sed commodi necessitatibus fugit, amet molestias id culpa a accusantium beatae ipsa aspernatur provident animi. Libero sunt, aperiam perspiciatis quo quas quisquam vero corrupti enim cumque impedit nihil repellendus.'
        // ]);

    }
}
