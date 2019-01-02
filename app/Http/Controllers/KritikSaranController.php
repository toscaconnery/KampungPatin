<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikSaran;

class KritikSaranController extends Controller
{
    public function post_kritik_saran(Request $request)
    {
    	$kritik_saran = new KritikSaran;
    	$kritik_saran->nama = $request->nama;
    	$kritik_saran->email = $request->email;
    	$kritik_saran->pesan = $request->pesan;
    	$kritik_saran->save();
    	return back();
    }

    public function get_kritik_saran()
    {
    	$kritik_saran = KritikSaran::get();
    	$this->data['selected_header'] = 0;
    	$this->data['kritik_saran'] = $kritik_saran;
    	return view('page.kritik_saran', $this->data);
    }
}
