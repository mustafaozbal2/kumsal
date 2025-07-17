@extends('layouts.app')
<ul class="navbar-nav d-flex flex-row gap-2">
    <li class="nav-item">
        <a href="{{ url('/siparisler') }}" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Siparişler
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/urunler/create') }}" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Ürün Ekle
        </a>
    </li>
   
</ul>
@section('content')
    <h1>Hoş Geldiniz!</h1>
    <p>Kumsal sandalye ve sandık üreticisine hoş geldiniz.</p>
@endsection
