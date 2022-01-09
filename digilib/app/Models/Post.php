<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'jenis', 'penulis', 'harga', 'gambar', 'abstrak'];
    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('excerpt', 'like', '%' . $search . '%')
                        ->orWhere('penulis', 'like', '%' . $search . '%')
                        ->orWhere('abstrak', 'like', '%' . $search . '%');
        });

        // $query->when($filters['kategori'] ?? false, function($query, $kategori){
        //     return $query->whereHas('kategori', function($query) use ($kategori){
        //         $query->where('slug', $kategori);
        //     });
        // });
    }

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    public function pinjam(){
        return $this->hasMany(pinjam::class, "post_id");
    }
}
