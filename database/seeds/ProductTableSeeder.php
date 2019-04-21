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
        \App\Models\Product1::create([
	        'nama'  	=> 'Produksi Benih Patin',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi benih patin dengan berbagai ukuran.',
		]);

        // Product 2
		\App\Models\Product2::create([
	        'nama'  	=> 'Produksi Pakan Ikan Patin',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi pakan ikan patin dengan berbagai ukuran.',
		]);

		// Product 3
		\App\Models\Product3::create([
	        'nama'  	=> 'Produksi Ikan Patin Segar',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi daging ikan patin patin segar langsung dari kolam.',
		]);

		// Product 4
		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Nugget Ikan Stick Original',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi nugget ikan stick original dari ikan patin.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Nugget Ikan Coin Rasa Sayur',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi nugget ikan patin berbentuk coin dengan rasa sayuran.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Kaki Naga Ikan',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi kaki naga ikan dari ikan patin.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Bakso Ikan Original Rebus',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan menggunakan daging ikan patin.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Bakso Ikan Goreng',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan patin untuk digoreng.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Batagor Ikan (Bakso Tahu Goreng)',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi bakso ikan patin (bakso tahu goreng).',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Fillet Ikan',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi fillet ikan patin.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Patin Potong Segar Beku',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi patin potong segar beku.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Pudung Ikan (Ikan Fillet Asin Patin)',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi pudung ikan (ikan fillet asin patin).',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Ikan Asap (Salai Patin)',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi ikan patin asap (ikan patin salai).',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Abon Ikan Patin',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi abon ikan patin.',
		]);

		\App\Models\Product4::create([
	        'nama'  	=> 'Produksi Kerupuk Kulit Ikan',
	        'harga' 	=> 0,
	        'deskripsi' => 'Produksi kerupuk kulit ikan patin.',
		]);

		// Product 5
		\App\Models\Product5::create([
	        'nama'  	=> 'Pelatihan Pembenihan Ikan Patin',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan pembenihan ikan patin.',
		]);

		\App\Models\Product5::create([
	        'nama'  	=> 'Pelatihan Pembuatan Pakan Ikan',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan pembuatan pakan ikan.',
		]);

		\App\Models\Product5::create([
	        'nama'  	=> 'Pelatihan Budidaya Ikan',
	        'harga' 	=> 0,
	        'deskripsi' => 'Pelatihan budidaya ikan.',
		]);
    }
}
