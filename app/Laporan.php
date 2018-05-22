<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';
   

    protected $fillable = array(
       'aktivitas', 'biaya', 'keterangan',
    );
}
