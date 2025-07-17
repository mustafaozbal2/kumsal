   <ul class="navbar-nav d-flex flex-row gap-2">
    <li class="nav-item">
        <a href="<?php echo e(route('anasayfa')); ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Ana Sayfa
        </a>
    </li>

    <li class="nav-item">
        <a href="<?php echo e(url('/siparisler')); ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Siparişler
        </a>
    </li>

    <li class="nav-item">
        <a href="<?php echo e(url('/urunler')); ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Ürün Listeleme
        </a>
    </li>
</ul>


<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    
    <h2>Yeni Ürün Ekle</h2>
    <form action="<?php echo e(route('urunler.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\musta\kumsal\resources\views/urunler/create.blade.php ENDPATH**/ ?>