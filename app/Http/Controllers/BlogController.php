<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function __construct()
	{
		$this->data['selected_header'] = 4;
	}

    public function get_blog_list()
    {
    	return view('page.blog_list', $this->data);
    }
}
