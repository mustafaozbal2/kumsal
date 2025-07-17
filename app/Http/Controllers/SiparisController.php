<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siparis;
use App\Models\Urun;

class SiparisController extends Controller
{
    // Sipariş formu (create)
    public function create($urun_id)
    {
        $urun = Urun::findOrFail($urun_id);
        return view('siparis.create', compact('urun'));
    }

    // Sipariş kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'urun_id' => 'required|exists:urunler,id',
            'isim' => 'required|string',
            'soyisim' => 'required|string',
            'il' => 'required|string',
            'ilce' => 'required|string',
            'adres' => 'required|string',
            'adet' => 'required|integer|min:1'
        ]);

        Siparis::create([
            'urun_id' => $request->urun_id,
            'isim' => $request->isim,
            'soyisim' => $request->soyisim,
            'il' => $request->il,
            'ilce' => $request->ilce,
            'adres' => $request->adres,
            'adet' => $request->adet,
        ]);

        return redirect('/siparisler')->with('success', 'Sipariş başarıyla oluşturuldu.');
    }

    // Siparişleri listeleme (Admin)
    public function index()
    {
        $siparisler = Siparis::with('urun')->orderBy('created_at', 'desc')->get();
        return view('siparis.index', compact('siparisler'));
    }
}
