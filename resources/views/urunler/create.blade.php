<!-- Eski sayfa geçiş butonları kaldırıldı, modern navbar ile geçiş sağlanıyor -->
@extends('layouts.app')

@section('content')

<div class="container mt-4">
    
    <h2>Yeni Ürün Ekle</h2>
    <form action="{{ route('urunler.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Ürün İsmi</label>
            <input type="text" name="isim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Fiyat</label>
            <input type="number" name="fiyat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="">Seçiniz</option>
                <option value="sandalye">Sandalye</option>
                <option value="sandik">Sandık</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Alt Kategori</label>
            <select name="alt_kategori" id="alt_kategori" class="form-control" required>
                <option value="">Önce kategori seçin</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Resim Yükle</label>
            <input type="file" name="resim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Açıklama (Opsiyonel)</label>
            <textarea name="aciklama" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>

<script>
document.getElementById('kategori').addEventListener('change', function() {
    let kategori = this.value;
    let altKategoriSelect = document.getElementById('alt_kategori');
    altKategoriSelect.innerHTML = '';

    if (kategori === 'sandalye') {
        altKategoriSelect.innerHTML = `
            <option value="4-ayakli">4 Ayaklı</option>
            <option value="3-ayakli">3 Ayaklı</option>
        `;
    } else if (kategori === 'sandik') {
        altKategoriSelect.innerHTML = `
            <option value="tek-sandik">Tek Sandık</option>
            <option value="cift-sandik">Çift Sandık</option>
        `;
    }
});
</script>
@endsection
