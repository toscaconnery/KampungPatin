<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\KomentarBlog;

class BlogController extends Controller
{
	public function __construct()
	{
		$this->data['selected_header'] = 4;
	}

    public function get_blog_list()
    {
    	$this->data['blog_list'] = Blog::select('judul', 'foto', 'created_at', 'konten', 'id')->paginate(2);
    	return view('page.blog_list', $this->data);
    }

    public function get_blog($id)
    {
    	$blog = Blog::where('id', $id)->first();
    	if(is_null($blog)) {
    		return redirect('blog-list');
    	}
    	// dd($blog);
    	$this->data['id_blog'] = $blog->id;
    	$this->data['judul'] = $blog->judul;
    	$this->data['konten'] = $blog->konten;
        $this->data['kreator'] = $blog->kreator;
    	$this->data['foto'] = $blog->foto;
    	$tag = explode(';', $blog->tag);
    	$this->data['tag'] = array();
    	foreach ($tag as $key => $value) {
    		$this->data['tag'][$key] = $value;
    	}
    	$this->data['tanggal_lengkap'] = $blog->created_at;
    	$this->data['tanggal_foto_1'] = date_format($this->data['tanggal_lengkap'], "d");
    	$this->data['tanggal_foto_2'] = date_format($this->data['tanggal_lengkap'], "M Y");

    	$komentar = KomentarBlog::where('id_blog', $blog->id)->get();
    	if(count($komentar) > 0) {
    		$this->data['punya_komentar'] = True;
    		$this->data['komentar'] = $komentar;
    	}
    	else {
    		$this->data['punya_komentar'] = False;
    	}

    	return view('page.blog_detail', $this->data);
    }

    public function tambahkan_blog()
    {
    	//
    }

    public function berikan_komentar_blog(Request $request)
    {
    	$komentar = new KomentarBlog;
    	$komentar->id_blog = $request->id_blog;
    	$komentar->komentar = $request->komentar;
    	$komentar->nama = $request->nama;
    	$komentar->email = $request->email;
    	$komentar->save();
    	return back();
    }
}
