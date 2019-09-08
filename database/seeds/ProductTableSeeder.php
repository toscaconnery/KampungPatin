<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Product 1
        \App\Models\Produk::create([
			'nama'  	=> 'Produksi Benih Patin',
			'jenis'		=> 'product 1',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi benih patin dengan berbagai ukuran.',
		]);

        // Product 2
		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Pakan Ikan Patin',
			'jenis'		=> 'product 2',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi pakan ikan patin dengan berbagai ukuran.',
		]);

		// Product 3
		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Ikan Patin Segar',
			'jenis'		=> 'product 3',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi daging ikan patin patin segar langsung dari kolam.',
		]);

		// Product 4
		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Nugget Ikan Stick Original',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi nugget ikan stick original dari ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Nugget Ikan Coin Rasa Sayur',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi nugget ikan patin berbentuk coin dengan rasa sayuran.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Kaki Naga Ikan',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi kaki naga ikan dari ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Bakso Ikan Original Rebus',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan menggunakan daging ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Bakso Ikan Goreng',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan patin untuk digoreng.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Batagor Ikan (Bakso Tahu Goreng)',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan patin (bakso tahu goreng).',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Fillet Ikan',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi fillet ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Patin Potong Segar Beku',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi patin potong segar beku.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Pudung Ikan (Ikan Fillet Asin Patin)',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi pudung ikan (ikan fillet asin patin).',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Ikan Asap (Salai Patin)',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi ikan patin asap (ikan patin salai).',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Abon Ikan Patin',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi abon ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Produksi Kerupuk Kulit Ikan',
			'jenis'		=> 'product 4',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi kerupuk kulit ikan patin.',
		]);

		// Product 5
		\App\Models\Produk::create([
			'nama'  	=> 'Pelatihan Pembenihan Ikan Patin',
			'jenis'		=> 'product 5',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan pembenihan ikan patin.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Pelatihan Pembuatan Pakan Ikan',
			'jenis'		=> 'product 5',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan pembuatan pakan ikan.',
		]);

		\App\Models\Produk::create([
			'nama'  	=> 'Pelatihan Budidaya Ikan',
			'jenis'		=> 'product 5',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan budidaya ikan.',
		]);
    }
}
