<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\pinjam;

class PostController extends Controller
{
    public function index(){

        
        return view('home', [
            "title" => "All Books",
            "posts" => Post::latest()->filter(request(['search']))->paginate(4)->withQueryString()
        ]);
    }

    public function buku(){

        
        return view('bukubuku', [
            "title" => "All Books",
            "posts" => Post::latest()->filter(request(['search']))->paginate(4)->withQueryString()

        ]);
    }
    public function detail(Post $post){

        return view('detailbooks', [
            "title" => "DetailBooks",
            "post" => $post
    
        ]);
    }
    public function jenis(kategori $kategori){

        return view('jenis', [
            'posts' => $kategori->posts,
            'title' => $kategori->nama
        ]);
    }


    public function indexdashboard(){
        return view('dashboard.dash', [
            "title" => "Dashboard",
        ]);
    }

    public function mypost(){
        return view('dashboard.mypost', [
            "title" => "My Post",
            "posts" => Post::latest()->filter(request(['search']))->paginate(8)->withQueryString()

        ]);
    }
    
    public function createpostindex(){
        return view('dashboard.createpost', [
            "title" => "Create Post",
            'jenisjenis' => kategori::all()

        ]);
    }
    public function createbook(Request $request){
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $gambarbuku = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambarbuku);
            $files->move($lokasi, $gambarbuku);
            $post = new Post();
            $post->title = $request->title;
            $post->kategori_id = $request->kategori_id;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->penulis = $request->penulis;
            $post->harga = $request->harga;
            $post->gambar = $pathImg;
            $post->abstrak = $request->abstrak;
            $post->save();
            return redirect('/mypost');
        }
    }
    public function deletebook($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/mypost');
    }
    public function editbookindex($id){

        return view('dashboard.editpost', [
            "title" => "Edit Post",
            'post' => Post::find($id),
            'jenisjenis' => kategori::all()
    
        ]);
    }
    public function updatebook($id, Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $gambarbuku = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            // $gambarbuku = $files->getClientOriginalName() . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambarbuku);
            $files->move($lokasi, $gambarbuku);
            $posts = Post::all();
            $post = $posts->find($id);
            $post->title = $request->title;
            $post->kategori_id = $request->kategori_id;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->penulis = $request->penulis;
            $post->harga = $request->harga;
            $post->gambar = $pathImg;
            $post->abstrak = $request->abstrak;
            $post->save();
            return redirect('/mypost');
        }
    }

    public function pinjam($id){

            return view('pinjam', [
                "title" => "Peminjaman",
                'post' => Post::find($id),
                'p' => Post::all(),
                // 'jenisjenis' => kategori::all()
        
            ]);
    }

    public function createpinjam(Request $request)
    {
        if ($files = $request->file('gambar')) {
            $file = $request->file('gambar');
            $lokasi = 'uploaded/images/';
            $gambarKTM = rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $gambarKTM);
            $files->move($lokasi, $gambarKTM);    
            $pinjam = new pinjam();
            $pinjam->post_id = $request->post_id;
            $pinjam->nama = $request->nama;
            // $pinjam->email = $request->email;
            $pinjam->nik = $request->nik;
            $pinjam->no_hp = $request->no_hp;
            $pinjam->gambar = $pathImg;
            $pinjam->status = $request->status;
            $pinjam->harga = $request->harga;
            $pinjam->denda = $request->denda;
            $pinjam->save();
            return redirect('/');
        }
        }
}
