

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Hasil Pencarian Kontak</h1>
        <p>Keyword: <?php echo e($keyword); ?></p>
        <ul>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($contact->first_name); ?> <?php echo e($contact->last_name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <a href="<?php echo e(route('Contacts.index')); ?>" class="btn btn-primary">Kembali ke Daftar Kontak</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/Contacts/search.blade.php ENDPATH**/ ?>