<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product1;
use App\Models\Product2;
use App\Models\Product3;
use App\Models\Product4;
use App\Models\Product5;

class ProductController extends Controller
{
    public function get_product($jenis_produk = null)
    {
        $this->data['selected_header'] = 3;

    	$this->data['product1'] = Product1::all();
    	$this->data['product1modal'] = $this->data['product1'];
    	$this->data['product1script'] = $this->data['product1'];

    	$this->data['product2'] = Product2::all();
    	$this->data['product2modal'] = $this->data['product2'];
    	$this->data['product2script'] = $this->data['product2'];

    	$this->data['product3'] = Product3::all();
    	$this->data['product3modal'] = $this->data['product3'];
    	$this->data['product3script'] = $this->data['product3'];

    	$this->data['product4'] = Product4::all();
    	$this->data['product4modal'] = $this->data['product4'];
    	$this->data['product4script'] = $this->data['product4'];

    	$this->data['product5'] = Product5::all();
    	$this->data['product5modal'] = $this->data['product5'];
    	$this->data['product5script'] = $this->data['product5'];
        return view('page.product', $this->data);
    }

}
