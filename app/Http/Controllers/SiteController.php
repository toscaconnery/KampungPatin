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
        return view('page.shards-index');
    }

    public function index2_landing()
    {
        return view('page.shards-index-landing');
    }
}
