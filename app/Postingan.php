<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
	protected $table = 'postingans';

    protected $fillable = [
        'email', 'namausaha','biaya','tempatusaha','namafoto','typefoto','diskripsi'
    ];
}

 