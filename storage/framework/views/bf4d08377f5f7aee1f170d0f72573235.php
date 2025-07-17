
<!-- Eski sayfa geçiş butonları kaldırıldı, modern navbar ile geçiş sağlanıyor -->
<?php $__env->startSection('content'); ?>
<h2>Ürünler</h2>
<div class="row">
    <?php $__currentLoopData = $urunler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <?php if($urun->resim): ?>
                 <img src="<?php echo e(asset('images/' . $urun->resim)); ?>" class="card-img-top" height="200">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($urun->isim); ?></h5>
                    <p><?php echo e($urun->aciklama); ?></p>
                    <p><strong>Fiyat:</strong> <?php echo e($urun->fiyat); ?> TL</p>
                    <p><strong>Kategori:</strong> <?php echo e($urun->kategori); ?></p>
<a href="<?php echo e(route('siparis.create', $urun->id)); ?>" class="btn btn-success">Sipariş Ver</a>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\musta\kumsal\resources\views/urunler/index.blade.php ENDPATH**/ ?>