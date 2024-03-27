

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Detail Kontak</h1>
        <p><strong>Nama:</strong> <?php echo e($contact->first_name); ?> <?php echo e($contact->last_name); ?></p>
        <p><strong>Email:</strong> <?php echo e($contact->email); ?></p>
        <p><strong>Phone:</strong> <?php echo e($contact->phone); ?></p>
        <p><strong>User ID:</strong> <?php echo e($contact->user_id); ?></p>
        <a href="<?php echo e(route('Contacts.index')); ?>" class="btn btn-secondary">Kembali ke Daftar Kontak</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_praktikum\resources\views/Contacts/get.blade.php ENDPATH**/ ?>