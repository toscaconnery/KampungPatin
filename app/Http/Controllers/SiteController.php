<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	// public function init
    public function get_index()
    {
    	return view('page.index');
    }

    public function get_contact()
    {
    	return view('page.contact');
    }

    public function get_history()
    {
    	return view('page.history');
    }

    public function get_vision_mission()
    {
    	return view('page.vision_mission');
    }

    public function get_founder()
    {
    	return view('page.founder');
    }

    public function get_award()
    {
    	return view('page.award');
    }
}
