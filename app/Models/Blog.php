<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
		'judul',
		'konten',
		'foto',
		'tag',
    ];
}