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

    public function get_contact()
    {
        $this->data['selected_header'] = 6;
    	return view('page.contact', $this->data);
    }

    public function get_history()
    {
        $this->data['selected_header'] = 2;
        return view('page.history', $this->data);
    }

    public function get_vision_mission()
    {
        $this->data['selected_header'] = 2;
        return view('page.vision_mission', $this->data);
    }

    public function get_founder()
    {
        $this->data['selected_header'] = 2;
    	return view('page.founder', $this->data);
    }

    public function get_award()
    {
    	return view('page.award');
    }
}
