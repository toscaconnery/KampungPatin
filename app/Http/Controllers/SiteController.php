<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	// public function init
    public function get_index()
    {
        $this->data['selected_header'] = 1;
    	return view('page.index', $this->data);
    }

    public function get_contact_us()
    {
        $this->data['selected_header'] = 6;
    	return view('page.contact', $this->data);
    }

    public function get_contact_us2()
    {
        $this->data['selected_header'] = 6;
        return view('page.contact2', $this->data);
    }

    public function sejarah()
    {
        $this->data['selected_header'] = 2;
        return view('page.sejarah', $this->data);
    }

    public function visi_misi()
    {
        $this->data['selected_header'] = 2;
        return view('page.visi_misi', $this->data);
    }

    public function pendiri()
    {
        $this->data['selected_header'] = 2;
    	return view('page.pendiri', $this->data);
    }

    public function get_award()
    {
    	return view('page.award');
    }

    public function index2()
    {
        return view('page.shards_index');
    }

    public function index2_landing()
    {
        return view('page.shards_index_landing');
    }

    public function sejarah2()
    {
        return view('page.shards_sejarah');
    }

    public function penghargaan2()
    {
        return view('page.shards_penghargaan');
    }

    public function visi_misi2()
    {
        return view('page.shards_visi_misi');
    }

    public function pendiri2()
    {
        return view('page.shards_pendiri');
    }

    public function visi_misi3()
    {
        return view('page.shards_visi_misi3');
    }

    public function pemesanan2()
    {
        return view('page.shards_pemesanan2');
    }

    public function produk_1()
    {
        return view('page.shards_produk_1');
    }

    public function produk_2()
    {
        return view('page.shards_produk_2');
    }

    public function produk_3()
    {
        return view('page.shards_produk_3');
    }

    public function produk_5()
    {
        return view('page.shards_produk_5');
    }
}
