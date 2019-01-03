<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarBlog extends Model
{
    protected $table = 'komentar_blog';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
		'id_blog',
		'komentar',
		'nama',
		'email',
    ];
}