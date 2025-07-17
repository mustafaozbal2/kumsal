
<ul class="navbar-nav d-flex flex-row gap-2">
    <li class="nav-item">
        <a href="<?php echo e(url('/siparisler')); ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Siparişler
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo e(url('/urunler/create')); ?>" class="btn btn-outline-dark rounded-pill px-4 py-2">
            Ürün Ekle
        </a>
    </li>
   
</ul>
<?php $__env->startSection('content'); ?>
    <h1>Hoş Geldiniz!</h1>
    <p>Kumsal sandalye ve sandık üreticisine hoş geldiniz.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\musta\kumsal\resources\views/home.blade.php ENDPATH**/ ?>