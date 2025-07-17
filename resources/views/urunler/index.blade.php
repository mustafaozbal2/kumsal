@extends('layouts.app')
<!-- Eski sayfa geçiş butonları kaldırıldı, modern navbar ile geçiş sağlanıyor -->
@section('content')
<h2>Ürünler</h2>
<div class="row">
    @foreach($urunler as $urun)
        <div class="col-md-4">
            <div class="card mb-3">
                @if($urun->resim)
                 <img src="{{ asset('images/' . $urun->resim) }}" class="card-img-top" height="200">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $urun->isim }}</h5>
                    <p>{{ $urun->aciklama }}</p>
                    <p><strong>Fiyat:</strong> {{ $urun->fiyat }} TL</p>
                    <p><strong>Kategori:</strong> {{ $urun->kategori }}</p>
<a href="{{ route('siparis.create', $urun->id) }}" class="btn btn-success">Sipariş Ver</a>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

