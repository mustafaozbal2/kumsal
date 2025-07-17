<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    protected $table = 'siparisler';

    use HasFactory;

    protected $fillable = [
        'urun_id',
        'isim',
        'soyisim',
        'il',
        'ilce',
        'adres',
        'adet',
    ];

    public function urun()
    {
        return $this->belongsTo(Urun::class);
            return $this->belongsTo(Urun::class, 'urun_id');

    }
}
