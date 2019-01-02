<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    protected $table = 'product2';

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
