@extends('layouts.app')

@section('content')
<h2 class="mb-4" style="font-family:'Segoe UI',sans-serif; font-weight:600; color:#2196f3;">Sipariş Listesi</h2>
<div class="table-responsive rounded-4 shadow-sm">
<table class="table table-bordered align-middle">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Ürün Adı</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>İl</th>
            <th>İlçe</th>
            <th>Adres</th>
            <th>Adet</th>
            <th>Tarih</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siparisler as $siparis)
        <tr>
            <td>{{ $siparis->id }}</td>
            <td>{{ $siparis->urun->isim ?? 'Silinmiş Ürün' }}</td>
            <td>{{ $siparis->isim }}</td>
            <td>{{ $siparis->soyisim }}</td>
            <td>{{ $siparis->il }}</td>
            <td>{{ $siparis->ilce }}</td>
            <td>{{ $siparis->adres }}</td>
            <td>{{ $siparis->adet }}</td>
            <td>{{ $siparis->created_at->format('d.m.Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</table>
@endsection
