<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    //
    protected $table = 'urunler';
   	protected $fillable=['UrunAdi','Fiyat','Stok','Aciklama'];
}
