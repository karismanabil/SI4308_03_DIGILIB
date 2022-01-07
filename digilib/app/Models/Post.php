<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'jenis', 'penulis', 'harga', 'gambar', 'abstrak'];
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
