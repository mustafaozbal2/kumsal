<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index()
    {
        $urunler = Urun::all();
        return view('urunler.index', compact('urunler'));
    }

    public function create()
    {
        return view('urunler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isim' => 'required',
            'fiyat' => 'required|numeric',
            'kategori' => 'required',
            'alt_kategori' => 'required',
            'resim' => 'required|image'
        ]);

        // Resim yükleme
        $filename = time() . '.' . $request->file('resim')->getClientOriginalExtension();
        $request->file('resim')->move(public_path('images'), $filename);

        // Ürün kaydetme
        Urun::create([
            'isim' => $request->isim,
            'fiyat' => $request->fiyat,
            'kategori' => $request->kategori,
            'alt_kategori' => $request->alt_kategori,
            'resim' => $filename,
            'aciklama' => $request->aciklama
        ]);

        return redirect('/urunler')->with('basari', 'Ürün başarıyla eklendi!');
    }

    public function filtrele($kategori, $alt_kategori)
    {
        $urunler = Urun::where('kategori', $kategori)
                       ->where('alt_kategori', $alt_kategori)
                       ->get();

        return view('urunler.index', compact('urunler'));
    }
}
