<?php

namespace App\Models;


class Post
{
    private static $postbuku = [
        [
        "title" => "Judul Pertama",
        "slug" => "Judul-Tulisan-Pertama",
        "jenis" => "Artikel",
        "penulis" => "Joseph Joestar",
        "gambar" => "/upload/cover1.jpg",
        "harga" => "-",
        "abstrak" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non corporis dolores quidem ad quasi eum suscipit error explicabo iure, atque mollitia voluptates perspiciatis tenetur eaque perferendis rem sunt aliquam! Earum ad similique laborum excepturi praesentium non iste, ducimus eveniet optio corrupti commodi suscipit fugit eos tempore! Dignissimos, corrupti mollitia! ",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "Judul-Tulisan-Kedua",
            "jenis" => "Artikel",
            "penulis" => "Joseph Joestar",
            "gambar" => "/upload/cover2.jpg",
            "harga" => "-",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non corporis dolores quidem ad quasi eum suscipit error explicabo iure, atque mollitia voluptates perspiciatis tenetur eaque perferendis rem sunt aliquam! Earum ad similique laborum excepturi praesentium non iste, ducimus eveniet optio corrupti commodi suscipit fugit eos tempore! Dignissimos, corrupti mollitia! ",
            ]
    ];

    public static function all(){
        return self::$postbuku;
    }
}
