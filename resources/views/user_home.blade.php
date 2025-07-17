
@extends('layouts.app')

@section('content')

<div class="container-fluid p-0" style="background: linear-gradient(90deg, #e3f2fd 0%, #fff 100%); min-height: 100vh;">
    <div class="row justify-content-center align-items-center" style="min-height:400px;">
        <div class="col-12 col-md-5 d-flex justify-content-center">
            <img src="{{ asset('images/klasik.jpg') }}" alt="Sandalye" style="max-width:350px; max-height:320px; border-radius:24px; box-shadow:0 4px 24px #2196f3a0;">
        </div>
        <div class="col-12 col-md-5 d-flex justify-content-center">
            <img src="{{ asset('images/sandik.jpg') }}" alt="Sandık" style="max-width:350px; max-height:320px; border-radius:24px; box-shadow:0 4px 24px #21cbf3a0;">
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-8 text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Kumsal Logo" style="height:110px; margin-bottom:16px; border-radius:50%; background:linear-gradient(135deg,#ffe082 60%,#fffde7 100%); box-shadow:0 4px 24px #2196f3a0,0 0 0 8px #fffde7; border:3px solid #ffd54f;">
            <h1 style="font-family:'Segoe UI',sans-serif; font-weight:700; color:#2196f3; font-size:2.5rem;">Kumsal</h1>
            <p style="font-size:1.2rem; color:#333; font-family:'Segoe UI',sans-serif;">Sandalye ve Sandıkta Kalitenin Adı</p>
        </div>
    </div>

    <!-- Kullanıcıya özel hızlı erişim butonları -->
    <!-- Hızlı erişim butonları kaldırıldı, modern görünüm için slider ve içerik öne çıkarıldı -->

    <!-- Kategorilerden öne çıkanlar sliderı -->
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-10">
            <div id="kategoriSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                <div class="carousel-inner">
                    @php
                        $altKategoriler = [];
                        foreach(\App\Models\Urun::all() as $urun) {
                            if (!isset($altKategoriler[$urun->alt_kategori])) {
                                $altKategoriler[$urun->alt_kategori] = $urun;
                            }
                        }
                        $gosterilecekler = array_values($altKategoriler);
                        $slideGroups = array_chunk($gosterilecekler, 4);
                    @endphp
                    @foreach($slideGroups as $groupIndex => $group)
                        <div class="carousel-item @if($groupIndex == 0) active @endif">
                            <div class="row justify-content-center align-items-center">
                                @foreach($group as $urun)
                                    <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center mb-3">
                                        <a href="{{ url('/urunler/' . $urun->kategori . '/' . $urun->alt_kategori) }}" class="text-decoration-none">
                                            <div class="card shadow-lg border-0" style="width: 100%; max-width: 220px; border-radius:18px; transition:transform .2s;">
                                                <img src="{{ asset('images/' . $urun->resim) }}" class="card-img-top" style="height:140px; object-fit:cover; border-radius:18px 18px 0 0;">
                                                <div class="card-body text-center" style="background: #f8f9fa; border-radius:0 0 18px 18px;">
                                                    <h5 class="card-title" style="font-weight:600; color:#333; font-size:17px;">{{ $urun->isim }}</h5>
                                                    <p class="card-text" style="font-size:13px; color:#666;">{{ $urun->kategori }} / {{ $urun->alt_kategori }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#kategoriSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Önceki</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#kategoriSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sonraki</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Alt bilgi barı -->
   
</div>

@endsection
