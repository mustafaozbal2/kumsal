<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
     protected $table = 'urunler'; 
     protected $fillable = ['isim', 'fiyat', 'resim', 'kategori', 'alt_kategori'];

}
