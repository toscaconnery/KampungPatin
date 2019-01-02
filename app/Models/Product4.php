<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product4 extends Model
{
    protected $table = 'product4';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
		'nama',
		'harga',
		'deskripsi',
		'foto1',
		'foto2',
		'foto3',
    ];
}
