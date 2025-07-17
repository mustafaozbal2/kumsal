

<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = $siparisler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siparis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($siparis->id); ?></td>
            <td><?php echo e($siparis->urun->isim ?? 'Silinmiş Ürün'); ?></td>
            <td><?php echo e($siparis->isim); ?></td>
            <td><?php echo e($siparis->soyisim); ?></td>
            <td><?php echo e($siparis->il); ?></td>
            <td><?php echo e($siparis->ilce); ?></td>
            <td><?php echo e($siparis->adres); ?></td>
            <td><?php echo e($siparis->adet); ?></td>
            <td><?php echo e($siparis->created_at->format('d.m.Y H:i')); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\musta\kumsal\resources\views/siparis/index.blade.php ENDPATH**/ ?>