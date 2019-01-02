<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product3 extends Model
{
    protected $table = 'product3';

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
